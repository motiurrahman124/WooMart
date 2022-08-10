<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Dashboard\AuthController;
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

Route::get('/login', [UserAuthController::class, 'signin'])->name('login.form');
Route::post('/login-check', [UserAuthController::class, 'login'])->name('loginCheck');

Route::get('/signup', [UserAuthController::class, 'signup'])->name('signup.form');
Route::post('/signup-check', [UserAuthController::class, 'signup'])->name('signup.store');

Route::group(['prefix' => 'blog'], function(){
    Route::get('/', [HomeController::class, 'blog'])->name('blog');
    Route::get('/single-blog/{id}', [BlogController::class, 'single_blog'])->name('single_blog');
});
