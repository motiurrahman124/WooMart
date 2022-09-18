<?php

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

function fileUploade($image, $path)
{
    if(!file_exists(public_path($path)))
    {
        mkdir(public_path($path),0777, true);
    }

    $name = $image->getClientOriginalName();
    $imagename = time()."_".$name;
    $destination = public_path($path);
    $image->move($destination,$imagename);

    return $path.$imagename;
}

function categories()
{
    return Category::get();
}

function megaCategories()
{
    return Category::where('parent_id', 0)->with('child')->get();
}



function cartNumber()
{
    return Cart::where(['user_id' => Auth::id()])->sum('qty');
}

function cartAmount()
{
    $cart_price     = 0;

    $carts = Cart::where(['user_id' => Auth::id()])->get();
    if(isset($carts[0])) {
        foreach ($carts as $item) {
            $product = Product::where('id', $item->product_id)->first();
            $cart_price = $cart_price + ($item->qty * $product->discount_price);
        }
    }

    return $cart_price;
}


function wishlistNumber()
{
    return Wishlist::where(['user_id' => Auth::id()])->count();
}
