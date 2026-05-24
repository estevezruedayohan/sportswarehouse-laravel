<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
      // Retrieve all categories
      $featuredProducts = Product::query()->where('featured', 1)->get();

      return view('index', compact('featuredProducts'));
    }
}
