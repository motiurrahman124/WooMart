<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod("POST")) {
            if(Auth::attempt(['email' =>$request->email, 'password' =>$request->password])) {
                return  redirect()->route('home');
            }
            return redirect()->back();
        }
        return view('Frontend.auth.signin');
    }

    public function signup (Request $request)
    {
        if($request->isMethod("POST")) {
            
        }
        return view('Frontend.auth.signup');
    }
}
