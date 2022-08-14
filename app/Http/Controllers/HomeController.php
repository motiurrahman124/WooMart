<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['recent_blogs']   = Blog::orderBy('id','desc')->withCount('comments')->with('author')->limit(4)->get();
        $data['sliders']        = Slider::orderBy('id','desc')->get();
        
        return view('Frontend.home.index',['menu' => 'home', 'data' => $data]);
    }

    
    public function blog()
    {
        $data['recent_blogs'] = Blog::orderBy('id','desc')->with('author')->get();
        return view('Frontend.home.blog',['data'=>$data]);
    }
    
}
