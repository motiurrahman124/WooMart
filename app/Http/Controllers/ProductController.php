<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function details($slug)
    {
        $product = Product::where(['slug' => $slug])->first();
        if(!empty($product)) {
            $categories = Category::whereHas('product')->get();
            $brands     = Brand::whereHas('product')->get();
            $related_products = Product::where(['category_id' => $product->category_id])->get();
            return view('Frontend.product.single-product',['product' => $product,'productList' => $related_products, 'categories' => $categories, 'brands' => $brands]);
        }

        return redirect()->back();
    }

    public function products(Request $request)
    {
        $query = Product::select('*');

        $query->when(!empty(request('category_id')), function($cateProd) {
            return $cateProd->where('category_id', request('category_id'))->get();
        });

        $query->when(!empty(request('brand_id')), function($brandProd) {
            return $brandProd->where('brand_id', request('brand_id'))->get();
        });

        $query->when(!empty(request('search')), function($searchQ) {

            return $searchQ->where('name','like', '%'.request('search').'%')
                    ->orWhereHas('brand', function($brandQ) {
                return $brandQ->where('title','like', '%'.request('search').'%' );

            })->orWhereHas('category', function($catQ) {
                    return $catQ->where('name','like', '%'.request('search').'%' );
            });
        });



        $products = $query->get();
        $categories = Category::whereHas('product')->get();
        $brands     = Brand::whereHas('product')->get();
       
        return view('Frontend.product.products',['products' => $products, 'categories' => $categories, 'brands' => $brands]);

    }

    // public function categoryProducts($category_id)
    // {
    //     $products = Product::where(['category_id' => $category_id])->get();
    //     if(isset($products[0])) {
    //         return view('Frontend.product.products',['products' => $products]);
    //     }
    //     return redirect()->back();
    // }
}
