<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Frontend.home.index');
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
