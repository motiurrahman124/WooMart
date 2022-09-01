<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
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

Route::get('/product/{slug}', [ProductController::class, 'details'])->name('product.details');

Route::get('/shop', [ProductController::class, 'products'])->name('products');


Route::get('/login', [UserAuthController::class, 'signin'])->name('login.form');
Route::post('/login-check', [UserAuthController::class, 'login'])->name('loginCheck');

Route::get('/signup', [UserAuthController::class, 'signup'])->name('signup.form');
Route::post('/signup-check', [UserAuthController::class, 'signup'])->name('signup.store');

Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');


Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function(){

    Route::get('/', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/update', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::get('/password-change', [ProfileController::class, 'passwordChange'])->name('password.change');
    Route::post('/password-change-process', [ProfileController::class, 'passwordChangeProcess'])->name('password.change.process');

});



Route::group(['prefix' => 'blog'], function(){
    Route::get('/', [HomeController::class, 'blog'])->name('blog');
    Route::get('/single-blog/{id}', [BlogController::class, 'single_blog'])->name('single_blog');
    Route::post('/blog-comment', [BlogController::class, 'comment'])->name('blog.comment.store');
});
