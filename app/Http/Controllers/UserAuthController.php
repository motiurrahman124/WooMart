<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function signin(Request $req)
    {
        return view('Frontend.auth.login');
    }

    public function login (Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }
        return redirect()->back();
    }

    public function signup(Request $request)
    {
        if($request->isMethod("POST"))
        {
            $request->validate([
                'name'      => 'required',
                'email'     => 'required|unique:users',
                'password'  => 'required|min:6|confirmed',
                'agree'     => 'required'
            ]);

            $user = User::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => Hash::make($request->password),
            ]);

            return redirect()->route('login.form');
        }

        return view('Frontend.auth.signup');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
