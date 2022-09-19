<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('Frontend.cart.checkout');
    }

    public function store(Request $request)
    {
        if($request->isMethod("POST"))
        {
            $bill = Bill::create([
                'user_id' => $request->user_id,
                'name' => $request->fullname,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country,
                'street_address' => $request->street_address,
                'city' => $request->city,
                'district' => $request->district,
                'zip_code' => $request->zipcode,
            ]);

            $ship = Shipping::create([
                'user_id' => $request->user_id2,
                'name' => $request->fullname2,
                'email' => $request->email2,
                'phone' => $request->phone2,
                'country' => $request->country2,
                'street_address' => $request->street_address2,
                'city' => $request->city2,
                'district' => $request->district2,
                'zip_code' => $request->zipcode2,
            ]);
        }
    }
}
