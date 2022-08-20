<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\CurrentPasswordCheckRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = User::where(['id' => Auth::id()])->first();
        return view('Frontend.profile.my_profile',['user' => $user]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255|unique:users,phone,'.Auth::id(),
            'email' => 'required|max:255|unique:users,email,'.Auth::id(),
        ]);

        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['about'] = $request->about;

        if(!empty($request->image))
        {
            $data['image'] = fileUploade($request->image, IMAGE_PROFILE_PATH);
        }
        $user = User::where(['id' => Auth::id()])->update($data);

        return redirect()->back();
       
    }

    public function passwordChange()
    {
        $user = User::where(['id' => Auth::id()])->first();
        return view('Frontend.profile.password_change',['user' => $user]);
    }

    public function passwordChangeProcess(Request $request)
    {

        $request->validate([
            'current_password' => ['required', new CurrentPasswordCheckRule()],
            'password' => 'required|min:6|confirmed|different:current_password',
        ]);

        User::where(['id' => Auth::id()])->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back();

    }
}
