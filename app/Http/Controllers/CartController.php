<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addtoCart(Request $request)
    {
        $cart = Cart::where(['user_id' => Auth::id(), 'product_id' => $request->product_id])->first();
        if(!empty($cart)) {
            $cart->update([
                'qty' => $cart->qty + 1
            ]);
        }

        $cart = Cart::create([
            'user_id'   => Auth::id(),
            'product_id'=> $request->product_id,
            'qty'       => 1
        ]);

        // $products = Product::whereHas('cart', function($q) {
        //     return $q->where(['user_id' => Auth::id()]);
        // });

        $carts = Cart::where(['user_id' => Auth::id()])->get();
        $cart_number    = 0;
        $cart_price     = 0;
        if(isset($carts[0])) {
            foreach ($carts as $item) {
                $product = Product::where('id', $item->product_id)->first();
                $cart_number += 1;
                $cart_price = $cart_price + $product->discount_price;
            }
        }

        $data['item_number'] = $cart_number;
        $data['total_price'] = $cart_price;

        return response()->json($data);
    }
}
