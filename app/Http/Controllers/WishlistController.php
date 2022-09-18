<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    
    public function index()
    {
        $wishlist = Wishlist::where(['user_id' => auth::id()])->with('product')->get();

        return view('Frontend.wishlist.index',['wishlist' => $wishlist]);
    }
    
    public function addtoWishList(Request $request)
    {
        $wishlist = Wishlist::where(['user_id' => Auth::id(), 'product_id' => $request->product_id])->first();
        if(empty($wishlist)) {
            $cart = Wishlist::create([
                'user_id'   => Auth::id(),
                'product_id'=> $request->product_id,
            ]);

        } 



        // $products = Product::whereHas('cart', function($q) {
        //     return $q->where(['user_id' => Auth::id()]);
        // });


        $wishlist_number = Wishlist::where(['user_id' => Auth::id()])->count();



        $data['item_number'] = $wishlist_number;

        return response()->json($data);
    }

    public function remove($id)
    {
         Wishlist::where(['id' => $id])->delete();
         return redirect()->back();
    }
}
