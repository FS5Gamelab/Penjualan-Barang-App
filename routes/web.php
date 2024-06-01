<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('dashboard', function(){
    return view('dashboard.index',[
        'title' => 'Dashboard'
    ]);
});

Route::resource('dashboard/products', ProductController::class);
Route::resource('dashboard/categories', CategoryController::class);
Route::resource('dashboard/brands', BrandController::class);

Route::get('dashboard/billing', function(){
    return view('dashboard.billing',[
        'title' => 'Billing'
    ]);
});