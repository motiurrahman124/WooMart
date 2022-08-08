<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['recent_blogs'] = Blog::orderBy('id','desc')->limit(4)->get();
        return view('Frontend.home.index',['menu' => 'home', 'data' => $data]);
    }
    public function blog()
    {
        return view('Frontend.home.blog');
    }
    public function single_blog()
    {
        
        return view('Frontend.home.blog.single-blog');
    }
}
