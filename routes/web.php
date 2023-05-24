<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/read', [ProductController::class, 'read'])->name('products.read');
Route::get('/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');