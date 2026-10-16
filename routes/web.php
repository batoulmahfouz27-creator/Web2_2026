<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/expensive', [ProductController::class, 'expensive']);
Route::get('/products/electronics', [ProductController::class, 'electronics']);
Route::get('/categories/1/products', [ProductController::class, 'categoryProducts']);
Route::get('/products/1/category', [ProductController::class, 'productCategory']);
Route::get('/products/{id}', [ProductController::class, 'show']);