<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// View All Products
Route::get('/viewProducts', [ProductController::class, 'index'])->name('product.index');

// View Products by Category
Route::get('/viewProducts/{id}', [ProductController::class, 'byCategory'])->name('product.category');

// View Products by search -> GET /search?query=abc
Route::get('/search', [ProductController::class, 'search'])->name('product.search');

// Route to show the initial form
Route::get('/contactUs', [ContactController::class, 'show'])->name('contact.show');

// Route to process the data when submit
Route::post('/contactUs', [ContactController::class, 'submit'])->name('contact.submit');
