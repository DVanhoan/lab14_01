<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;



Route::resource('category', CategoryController::class);


Route::resource('product', ProductController::class);

Route::get('/', function () {
    return redirect()->route('product.index');
});
