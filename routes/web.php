<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Menambahkan impor ProductController

Route::get('/', function () {
    return view('welcome');
});
//read
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
//create
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// edit
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
//delete
Route::delete('/products/{product}', [ProductController::class, 'delete'])->name('products.delete');

