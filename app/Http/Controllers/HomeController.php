<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Show the index page with featured products list
   *
   * @return void
   */
  public function index()
  {
    // Retrieve featured products
    $featuredProducts = Product::query()->where('featured', 1)->get();

    return view('index', ['featuredProducts' => $featuredProducts]);
  }
}
