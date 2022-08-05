<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use Illuminate\Routing\RouteGroup;

Route::group(['prefix' => 'admin'], function(){
    Route::get('/login', [AuthController::class, 'login'])->name('admin.login');  
});

