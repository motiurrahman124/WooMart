<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $data['recent_blogs'] = Blog::orderBy('id','desc')->with('author')->limit(4)->get();
        return view('Frontend.home.index',['menu' => 'home', 'data' => $data]);
=======
        $data['recent_blogs'] = Blog::orderBy('id', 'desc')->with('author')->limit(4)->get();
        return view('Frontend.home.index',['menu' =>'home','data' => $data]);
>>>>>>> b61ef255aa01ce8665ae58b42acae15d0193180d
    }
    public function blog()
    {
        $data['recent_blogs'] = Blog::orderBy('id','desc')->with('author')->get();
        return view('Frontend.home.blog',['data'=>$data]);
    }
    
}
