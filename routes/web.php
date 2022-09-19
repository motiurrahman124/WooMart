<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\UserAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/store', [HomeController::class, 'store'])->name('contact.store');



Route::get('/product/{slug}', [ProductController::class, 'details'])->name('product.details');

Route::get('/shop', [ProductController::class, 'products'])->name('products');


Route::get('/login', [UserAuthController::class, 'signin'])->name('login.form');
Route::post('/login-check', [UserAuthController::class, 'login'])->name('loginCheck');

Route::get('/signup', [UserAuthController::class, 'signup'])->name('signup.form');
Route::post('/signup-check', [UserAuthController::class, 'signup'])->name('signup.store');

Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');


Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function(){

    Route::get('/', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/wishlist', [ProfileController::class, 'wishlist'])->name('wishlist');
    Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/password-change', [ProfileController::class, 'passwordChange'])->name('password.change');
    Route::post('/password-change-process', [ProfileController::class, 'passwordChangeProcess'])->name('password.change.process');

});



Route::group(['prefix' => 'blog'], function(){
    Route::get('/', [HomeController::class, 'blog'])->name('blog');
    Route::get('/single-blog/{id}', [BlogController::class, 'single_blog'])->name('single_blog');
    Route::post('/blog-comment', [BlogController::class, 'comment'])->name('blog.comment.store');
});

Route::group(['prefix' => 'cart'] , function(){
    Route::get('list', [CartController::class,'index'])->name('add.list');
    Route::post('store', [CartController::class,'addtoCart'])->name('add.cart');
    Route::get('remove/{id}', [CartController::class,'remove'])->name('cart.remove');
    Route::post('cart-increment', [CartController::class,'increment'])->name('cart.increment');
    Route::post('cart-decrement', [CartController::class,'decrement'])->name('cart.decrement');

    Route::group(['prefix' => 'checkout'], function(){
        Route::get('/', [CheckoutController::class,'checkout'])->name('checkout');
    });

    
});

Route::group(['prefix' => 'Wishlist'] , function(){
    Route::get('list', [WishlistController::class,'index'])->name('show.wishlist');
    Route::post('store', [WishlistController::class,'addtoWishList'])->name('add.WishList');
    Route::get('remove/{id}', [WishlistController::class,'remove'])->name('wishlist.remove');
});
