<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products =  Product::orderBy('id','desc')->get();
        return view('Backend.product.index',['menu' => 'product', 'products' => $products]);
    }   


    
    public function create()
    {   
        $categories = Category::orderBy('name', 'asc')->get();
        $brands = Brand::orderBy('title', 'asc')->get();

        return view('Backend.product.create',['menu' => 'product','categories' => $categories, 'brands' => $brands]);
    }

    
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:categories'
        ]);

        $data = [
            'name' => $request->name,
            'slug'  => Str::slug($request->name, '-'),
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'price' => $request->price,
            'discount' => $request->discount,
            'is_percentage_discount' => $request->is_percentage_discount == 'on' ? ENABLE : DISABLE,
            'is_featured_product' => $request->is_featured_product == 'on' ? ENABLE : DISABLE,
            'is_best_selling_product' => $request->is_best_selling_product == 'on' ? ENABLE : DISABLE,
            'is_new_arrival_product' => $request->is_new_arrival_product == 'on' ? ENABLE : DISABLE,
            'description' => $request->description,
        ];
       if(!empty($request->primary_image)) {
            $data['primary_image'] = fileUploade($request->primary_image, PROFILE_PRODUCT_PATH );
       }

        Product::create($data);

        toast('product successfully added', 'success');
        // Alert::success('Success Title', 'Success Message');

        return redirect()->route('product.index');
    }

    public function edit($slug)
    {
        $product = Product::where(['slug' => $slug])->first();

        dd($product);
        
        $products = product::where(['parent_id' => 0])->get();

        if(!empty($product))
        {
            return view('Backend.product.edit',['product' =>$product, 'menu' => 'product', 'categories' =>$products]);
        }
        return redirect()->back();
    }

    
    public function update(Request $request)
    {
       
        $request->validate([
            'name' => 'required'
        ]);
       
        if($request->banner)
        {
            $data['banner']   = fileUploade($request->banner,IMAGE_product_PATH); 
        }

       
        $data['name']   = $request->name;
        $data['parent_id']   = $request->parent_id; 
        $data['is_top_product_product']   = $request->is_top_product_product == 'on' ? true : false;
        
        $product = product::where('id', $request->id)->first();
        $product->update($data);

        return redirect ()->route('product.index');
    }

    public function delete($id)
    {
        $product = product::where(['id' => $id])->first();
        if(!empty($product))
        {
            $product->delete();
            return redirect()->route('product.index');
        }
        return redirect()->back();
    }
}
