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
      <li class="cat-navigation-item">
        <a href="#">Shoes</a>
      </li>
      <li class="cat-navigation-item">
        <a href="#">Helmets</a>
      </li>
      <li class="cat-navigation-item">
        <a href="#">Pants</a>
      </li>
      <li class="cat-navigation-item">
        <a href="#">Tops</a>
      </li>
      <li class="cat-navigation-item">
        <a href="#">Balls</a>
      </li>
      <li class="cat-navigation-item">
        <a href="#">Equipment</a>
      </li>
      <li class="cat-navigation-item">
        <a href="#">Training gear</a>
      </li>
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
        <div class="brand-image">
          <img src="{{ asset('images/brands/logo_nike_1.png') }}" alt="Logo Nike" />
        </div>
        <div class="brand-image">
          <img src="{{ asset('images/brands/logo_adidas_1.png') }}" alt="Logo Adidas" />
        </div>
        <div class="brand-image">
          <img src="{{ asset('images/brands/logo_skins_1.png') }}" alt="Logo Skins" />
        </div>
        <div class="brand-image">
          <img src="{{ asset('images/brands/logo_asics_1.png') }}" alt="Logo Asics" />
        </div>
        <div class="brand-image">
          <img src="{{ asset('images/brands/logo_newbalance_1.png') }}" alt="Logo Newbalance" />
        </div>
        <div class="brand-image">
          <img src="{{ asset('images/brands/logo_wilson_1.png') }}" alt="Logo Wilson" />
        </div>
      </div>
    </div>
  </section>

@endsection
