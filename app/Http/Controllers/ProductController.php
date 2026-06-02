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

    return view('viewProducts', ['listedProducts' => $allProducts, "searchTitle" => "All products"]);
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

    return view('viewProducts', ['listedProducts' => $filteredProducts, 'category' => $category, "searchTitle" => $category->name]);
  }

  /**
   * Display products matching search query
   *
   * @param Request $request HTTP request object
   */
  public function search(Request $request)
  {
    // Get the user "query" passed via query string
    $searchTerm = trim($request->input("query"));

    // Redirected with all products when the user search with input empty
    if (empty($searchTerm)) {
      return view('viewProducts', ['listedProducts' => Product::all(), 'searchTitle' => 'All products']);
    }

    // Search for events using the search term IF one was provided
    // ->when() conditionally runs the next bit of code
    $products = Product::query()->when($searchTerm, function ($query, $search) {
      // Filter by "name"
      return $query->where("name", "like", "%{$search}%");
    })->get();

    // Pass data into the view
    return view('viewProducts', ["listedProducts" => $products, "searchTerm" => $searchTerm, "searchTitle" => 'Results for: "' . $searchTerm . '"']);
  }


  /**
   * Show product details
   *
   * @param integer $id
   * @return void
   */
  public function showProduct(int $id)
  {
    $product = Product::findOrFail($id);
    $category = Category::findOrFail($product->categoryId);

    return view('productDetails', ['product' => $product, 'category' => $category]);
  }
}
