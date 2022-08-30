<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin'], function() {

    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('/login-check', [AuthController::class, 'adminCheck'])->name('admin.login.check');

    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('',[DashboardController::class,'index'])->name('admin.dashboard');
       
        /**
         * Blog section
         */
        Route::get('/blog-list',[BlogController::class,'index'])->name('blog.index');
        Route::get('/blog-create',[BlogController::class,'createBlog'])->name('createBlog');
        Route::post('/blog-store',[BlogController::class,'createNewBlog'])->name('createNewBlog');
        
        Route::get('/blog-edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
        Route::post('/blog-update',[BlogController::class,'update'])->name('blog.update');
       
        Route::get('/blog-delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
    });


    Route::group(['prefix' => 'slider'], function () {

        Route::get('/list',[SliderController::class,'index'])->name('slider.index');
        Route::get('/create',[SliderController::class,'create'])->name('slide.create');
        Route::post('/store',[SliderController::class,'store'])->name('slider.store');
        
        Route::get('/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
        Route::post('/update',[SliderController::class,'update'])->name('slider.update');
       
        Route::get('/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');

    });

    Route::group(['prefix' => 'brand'], function () {

        Route::get('/list',[BrandController::class,'index'])->name('brand.index');
        Route::get('/create',[BrandController::class,'create'])->name('brand.create');
        Route::post('/store',[BrandController::class,'store'])->name('brand.store');
        
        Route::get('/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
        Route::post('/update',[BrandController::class,'update'])->name('brand.update');
       
        Route::get('/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');

    });

    Route::group(['prefix' => 'category'], function () {

        Route::get('/list',[CategoryController::class,'index'])->name('category.index');
        Route::get('/create',[CategoryController::class,'create'])->name('category.create');
        Route::post('/store',[CategoryController::class,'store'])->name('category.store');
        
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('/update',[CategoryController::class,'update'])->name('category.update');
       
        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

    });

    Route::group(['prefix' => 'product'], function () {

        Route::get('/list',[ProductController::class,'index'])->name('product.index');
        Route::get('/create',[ProductController::class,'create'])->name('product.create');
        Route::post('/store',[ProductController::class,'store'])->name('product.store');
        
        Route::get('/enable/{slug}',[ProductController::class,'enable'])->name('product.enable');
        Route::get('/disable/{slug}',[ProductController::class,'disable'])->name('product.disable');

        Route::get('/edit/{slug}',[ProductController::class,'edit'])->name('product.edit');
        Route::post('/update',[ProductController::class,'update'])->name('product.update');
       
        Route::get('/delete/{slug}',[ProductController::class,'delete'])->name('product.delete');
        Route::get('/enable-disable/{id}',[ProductController::class,'enableDisable'])->name('product.enableDisable');

    });

});
