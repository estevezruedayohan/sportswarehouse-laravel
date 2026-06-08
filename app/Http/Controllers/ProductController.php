<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    // $category = Category::findOrFail($product->categoryId);

    return view('productDetails', ['product' => $product]);
  }

  /**
   * Save a product to session memory
   *
   * @param integer $id Product ID
   */
  public function addToCart(Request $request, int $id)
  {
    // Security Check if the product exist on product table
    Product::findOrFail($id);

    // To implement - get the value of quantity of products from form
    $quantity = (int) $request->input('quantity', 1);

    // Get the current list of saved products (from session)
    // Default to empty list
    // $cart = session()->get("cart", []);
    $cart = Session::get("cart", []);

    // if product already exists in the cart, add the quantity, if not add it with the quantity initial
    if (array_key_exists($id, $cart)) {
      $cart[$id] += $quantity;
    } else {
      $cart[$id] = $quantity;
    }

    // Save the updated list (into session)
    // session()->put("cart", $cart);
    Session::put("cart", $cart);

    // Redirect user back where they came from
    return redirect()->back()->with("message", "Product Added to Cart!");
  }

  /**
   * Remove a product from the cart
   *
   * @param integer $id Product ID
   */
  public function removeFromCart(int $id)
  {
    // Get the current list of saved products (from session)
    // Default to empty list
    // $cart = session()->get("cart", []);
    $cart = Session::get("cart", []);

    // default message when the item is not in saved products
    $message = "This item was not found in your cart";

    if (array_key_exists($id, $cart)) {
      // Remove the new product ID from the list (only if it exists)
      unset($cart[$id]);
      // Save the updated list (into session)
      // session()->put("cart", $cart);
      Session::put("cart", $cart);

      $message = "Item removed from your cart!";
    }


    // Redirect user back where they came from
    return redirect()->back()->with("message", $message);
  }

  /**
   * Show Cart
   *
   * @return void
   */
  public function viewCart()
  {
    // Get the saved products IDs
    $cart = Session::get("cart", []);

    // TODO:
    // if the cart is empty, return a message
    // if(empty($cart)){
    //   return view('cart', ["message" => "Your Cart is Empty"]);
    // }

    // Extract the product ids from the cart
    $productIds = array_keys($cart);

    // Fetch the actual cart from the db
    // $savedProducts = Product::whereIn('id', $productIds, "and", false)->get();
    $cartProducts = Product::on()->whereIn('id', $productIds)->get();

    // Create a totalizer
    $totalCartPrice = 0;

    foreach ($cartProducts as $product) {
      // Find the quantity saved using ID product
      $quantity = $cart[$product->id];

      // create a dynamic attribute to save quantity
      $product->quantity = $quantity;

      // Current price -> if saleprice or normalprice
      $currentPrice = $product->saleprice ?? $product->price;

      // Create subtotal for product and add it to totalprice
      $product->subtotal = $currentPrice * $quantity;
      $totalCartPrice += $product->subtotal;
    }

    return view('cart', ['cartProducts' => $cartProducts, 'totalCartPrice' => $totalCartPrice]);
  }
}
