<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// View All Products
Route::get('/products', [ProductController::class, 'index'])->name('products.all');

// View Products by Category
Route::get('/products/{id}', [ProductController::class, 'byCategory'])->name('product.category');

// View Products by Category
Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('product.show');

// Add Products to cart
Route::post('/cart/save/{id}', [ProductController::class, 'addToCart'])->name('cart.add');

// Remove Products to cart
Route::delete('/cart/remove/{id}', [ProductController::class, 'removeFromCart'])->name('cart.remove');

// View Products by search -> GET /search?query=abc
Route::get('/search', [ProductController::class, 'search'])->name('product.search');

// Route to show the initial form
Route::get('/contactUs', [ContactController::class, 'show'])->name('contact.show');

// Route to process the data when submit
Route::post('/contactUs', [ContactController::class, 'submit'])->name('contact.submit');

// Route to show the initial form
Route::view('/login', 'login')->name('login');

// Route to show the initial form
Route::view('/aboutUs', 'aboutUs')->name('about.show');

// Route to show the initial form
Route::view('/privacy', 'privacy')->name('privacy.show');
