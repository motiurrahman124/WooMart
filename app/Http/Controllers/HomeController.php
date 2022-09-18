<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['recent_blogs']   = Blog::orderBy('id','desc')->withCount('comments')->with('author')->limit(4)->get();
        $data['sliders']        = Slider::orderBy('id','desc')->get();
        $data['brand']          = Brand::orderBy('id','desc')->get();

        $products['featured_products']          = Product::where(['is_featured_product' => ENABLE, 'enable' => ENABLE])->limit(8)->get();
        $products['is_best_selling_products']   = Product::where(['is_best_selling_product' => ENABLE, 'enable' => ENABLE])->limit(8)->get();
        $products['is_new_arrival_products']    = Product::where(['is_new_arrival_product' => ENABLE, 'enable' => ENABLE])->limit(8)->get();
        
        $categories     = Category::where(['parent_id' => 0])->with('child')->limit(11)->get();     
        $top_categories = Category::where(['is_top_product_category' => true])->get();     
       
        return view('Frontend.home.index',['products' => $products, 'data' => $data, 'menu' => 'home','top_categories' => $top_categories, 'categoriess' => $categories]);
    }

    
    public function blog()
    {
        $data['recent_blogs'] = Blog::orderBy('id','desc')->with('author')->get();
        return view('Frontend.home.blog',['data'=>$data]);
    }

    public function contact()
    {
        return view('Frontend.home.contact');
    }
    public function store(Request $request)
    {
        $data['first_name'] = $request->firstName;
        $data['last_name'] = $request->lastName;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['message'] = $request->message;

        Contact::create($data);
        
        return redirect()->route('contact');
    }
    
}
