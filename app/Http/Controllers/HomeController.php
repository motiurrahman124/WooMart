<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Frontend.home.index');
    }
    public function signup()
    {
        return view('Frontend.home.signup');
    }
}
