@extends('layouts.app')
@section('title', 'Home')
@section('content')

  @include('partials/_productsFilter')

  <section class="hero-banner">
    <div class="hero-banner-container">
      <div class="hero-banner_overlay-container">
        <div class="hero-banner_overlay-text">
          <p class="hero-banner_paragraph">View our brand new range of</p>
          <p class="hero-banner_paragraph--lead">Sports balls</p>
          <a href="#" class="hero-banner_cta">Shop now</a>
        </div>
      </div>
    </div>
  </section>

  <div class="main-tittle-container">
    <h2 aria-label="Products list" class="main-tittle">
      Featured Products
    </h2>
  </div>

  <div class="gallery">
    @foreach ($featuredProducts as $product)
      <x-product-card :product=$product />
    @endforeach
  </div>

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
