<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login.form');
Route::post('/login-check', [AuthController::class, 'login'])->name('loginCheck');


Route::get('/sign-up', [AuthController::class, 'signup'])->name('signup.form');
Route::post('/sign-up-store', [AuthController::class, 'signup'])->name('signup.store');



Route::group(['prefix' => 'blog'], function(){
    Route::get('/', [HomeController::class, 'blog'])->name('blog');
    Route::get('/single-blog/{id}', [BlogController::class, 'single_blog'])->name('single_blog');
});
