<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $user = Auth::user();
        return view('Frontend.cart.billing', ['user' => $user]);
    }

    public function billingStore(Request $request)
    {
        if($request->isMethod("POST"))
        {
            $bill = Bill::create([
                'user_id' => Auth::id(),
                'name' => $request->fullname,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country,
                'street_address' => $request->street_address,
                'city' => $request->city,
                'district' => $request->district,
                'zip_code' => $request->zipcode,
            ]);

            session()->put('billing_id', $bill->id);

            return redirect()->route('checkout.shipping');

            // $ship = Shipping::create([
            //     'user_id' => $request->user_id2,
            //     'name' => $request->fullname2,
            //     'email' => $request->email2,
            //     'phone' => $request->phone2,
            //     'country' => $request->country2,
            //     'street_address' => $request->street_address2,
            //     'city' => $request->city2,
            //     'district' => $request->district2,
            //     'zip_code' => $request->zipcode2,
            // ]);
        }
    }

    public function shipping(Request $request)
    {
        if($request->isMethod("POST"))
        {
            DB::beginTransaction();

            $shipping = Shipping::create([
                'user_id' => Auth::id(),
                'name' => $request->fullname,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country,
                'street_address' => $request->street_address,
                'city' => $request->city,
                'district' => $request->district,
                'zip_code' => $request->zipcode,
            ]);

            $order = Order::create([
                'user_id'       => Auth::id(),
                'billing_id'    => session()->get('billing_id'),
                'shipping_id'   => $shipping->id,
            ]);
            $cart = Cart::where(['user_id' => Auth::id()])->get();

            $total_amount = 0;
            foreach($cart as $item)
            {
                $product = Product::where(['id' => $item->product_id])->first();
                if(empty($product)) {
                    continue;
                }

                $price         = $product->discount_price;
                $qty           = $item->qty;
                $total_price   = $price * $qty;

                $detailsData = [
                    'order_id'      => $order->id,
                    'product_id'    => $product->id,
                    'name'          => $product->name,
                    'image'         => $product->primary_image,
                    'price'         => $price,
                    'qty'           => $qty,
                    'total_price'   => $total_price
                ];

                OrderDetails::create($detailsData);
                $total_amount += $total_price;
            }

            $order->update([
                'total_amount'  => $total_amount,
                'vat'           => 5,
                'total_vat'     => totalTax($total_amount, 5),
                'grand_total'   => $total_amount +totalTax($total_amount, 5)
            ]);

            DB::commit();
            
            session()->put('order_id', $order->id);
            return redirect()->route('paymnet');
        }

        $billing = Bill::where(['id' => session()->get('billing_id')])->first();
        return view('Frontend.cart.shipping',['billing' => $billing]);
    }

    public function paymnet()
    {
        $order = Order::where(['id' => session()->get('order_id')])->first();
        // if(empty($order))
        // {
        //     return
        // }
        return view('Frontend.cart.payment', ['amount' => $order->grand_total]);
    }
}
