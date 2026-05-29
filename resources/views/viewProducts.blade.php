@extends('layouts.app')
@section('title', 'View Products')
@section('content')

  <search>
    <form class="search-wrapper" action="#">
      <label for="search-input" aria-label="Find a Product"></label>
      <input type="search" class="search-input" id="search-input" placeholder="Search products"
        aria-label="Enter the name of the product" />
      <button type="submit" class="search-button" aria-label="Submit search">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </form>
  </search>
  <div class="cat-navigation">
    <ul class="cat-links" aria-label="Product Categories">
      @foreach (config('common.productsCategories') as $category)
        <li class="cat-navigation-item">
          <a href="{{ $category['url'] }}">{{ $category['name'] }}</a>
        </li>
      @endforeach
    </ul>
  </div>

  <div class="main-tittle-container">
    <h2 aria-label="Products list" class="main-tittle">
      Featured Products
    </h2>
  </div>

  <div class="gallery">
    @foreach ($listedProducts as $product)
      <x-product-card :product=$product />
    @endforeach
  </div>

@endsection
