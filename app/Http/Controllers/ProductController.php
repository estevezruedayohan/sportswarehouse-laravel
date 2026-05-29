<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
   * Show the view Products page with all products
   *
   * @return void
   */
  public function index()
  {
    // Retrieve products
    $allProducts = Product::query()->get();

    return view('viewProducts', ['listedProducts' => $allProducts]);
  }

  /**
   * Show the view Products page with all products
   *
   * @return void
   */
  public function byCategory(int $id)
  {
    // Find if the category exists in the database
    $category = Category::findOrFail($id);
    // Retrieve products
    $filteredProducts = $category->products;

    return view('viewProducts', ['listedProducts' => $filteredProducts, 'category' => $category]);
  }
}
