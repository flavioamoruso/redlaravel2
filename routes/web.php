<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;


Route::get('/',[PublicController::class,'homepage'])->name('homepage');

Route::get('/products/index', [ProductController::class,'index'])->name('products.index');