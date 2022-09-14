<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function index()
    {
        $cart =  Cart::where(['user_id'=> Auth::id()])->with('product')->get();
        return view('frontend.cart.index',['carts' => $cart]);
    }

    public function addtoCart(Request $request)
    {
        $cart = Cart::where(['user_id' => Auth::id(), 'product_id' => $request->product_id])->first();
        if(!empty($cart)) {
            $cart->update([
                'qty' => $cart->qty + 1
            ]);

        } else {
            $cart = Cart::create([
                'user_id'   => Auth::id(),
                'product_id'=> $request->product_id,
                'qty'       => 1
            ]);
        }



        // $products = Product::whereHas('cart', function($q) {
        //     return $q->where(['user_id' => Auth::id()]);
        // });

        $carts = Cart::where(['user_id' => Auth::id()])->get();

        $cart_number = Cart::where(['user_id' => Auth::id()])->sum('qty');

        $cart_price     = 0;

        if(isset($carts[0])) {
            foreach ($carts as $item) {
                $product = Product::where('id', $item->product_id)->first();
                $cart_price = $cart_price + ($item->qty * $product->discount_price);
            }
        }

        $data['item_number'] = $cart_number;
        $data['total_price'] = $cart_price;

        return response()->json($data);
    }


    public function remove($id)
    {
         Cart::where(['id' => $id])->delete();
         return redirect()->back();
    }
}
