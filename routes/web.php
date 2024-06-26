<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;


Route::get('/',[PublicController::class,'homepage'])->name('homepage');

Route::get('/products/index', [ProductController::class,'index'])->name('products.index');

Route::get('/products/create',[ProductController::class,'create'])->name('products.create');

Route::post('/products/store',[ProductController::class,'store'])->name('products.store');

// Route::get('/products', [ProductController::class, 'index'])->middleware('auth');
