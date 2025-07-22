<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function() {

    Route::view('/', 'home')->name('home');
    Route::view('/menu', 'product-menu')->name('menu');
    Route::view('/about', 'about')->name('about'); 
    Route::view('/custom-order', 'custom-order')->name('custom.order');
    Route::view('/contact', 'contact')->name('contact');

    Route::view('/admin/login', 'auth.login')->name('login');
    Route::post('/admin/login', [AuthController::class, 'login']);

});

Route::middleware('auth')->group(function() {

    Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('/products', ProductController::class);

});