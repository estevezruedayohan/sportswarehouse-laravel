<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index'])->name('index');

// Route to show the initial form
Route::get('/contactUs', [ContactController::class, 'show'])->name('contact.show');

// Route to process the data when submit
Route::post('/contactUs', [ContactController::class, 'submit'])->name('contact.submit');
