<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// route::get('categories',[App\Http\Controller\CategoryController::class , 'index']);

Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Optional: List all products
// Product Routes
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Add this line
