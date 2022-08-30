<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function details($slug)
    {
        $product = Product::where(['slug' => $slug])->first();
        if(!empty($product)) {
            return view('Frontend.product.single-product',['product' => $product]);
        }

        return redirect()->back();
    }

    public function categoryProducts($category_id)
    {
        $products = Product::where(['category_id' => $category_id])->get();
        if(isset($products[0])) {
            return view('Frontend.product.products',['products' => $products]);
        }
        return redirect()->back();
    }
}
