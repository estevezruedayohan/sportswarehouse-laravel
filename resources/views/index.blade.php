@extends('layouts.app')
@section('title', 'Home')
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
  @include('partials._indexGallery')
  <section class="brands-section">
    <div class="section-tittle-container">
      <h2 aria-label="Our brands and Partnerships" class="section-tittle">
        Our brands and partnerships
      </h2>
    </div>
    <div class="brands-section__content">
      <div class="section-content">
        <p>These are some of our top brands and partnerships</p>
        <p>The best of the best is here</p>
      </div>
      <div class="container-brand-image">
        @foreach (config('common.featured_brands') as $brand)
          <img src="{{ asset('images/brands/' . $brand['image']) }}" alt="{{ $brand['alt'] }}" />
        @endforeach
      </div>
    </div>
  </section>

@endsection
