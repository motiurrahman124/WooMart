<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function signin(Request $req)
    {
        if($req->isMethod("POST"))
        {

        }

        return view('Frontend.auth.login');
    }
    public function signup(Request $req)
    {
        if($req->isMethod("POST"))
        {

        }

        return view('Frontend.auth.signup');
    }
}
