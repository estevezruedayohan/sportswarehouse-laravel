<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Show the index page with featured products
   *
   * @return void
   */
  public function index()
  {
    // Retrieve all featured products
    $featuredProducts = Product::query()->where('featured', 1)->get();

    return view('index', ['featuredProducts' => $featuredProducts]);
  }
}
