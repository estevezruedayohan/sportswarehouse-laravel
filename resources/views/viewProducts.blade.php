@extends('layouts.app')
@section('title', 'View Products')
@section('content')

  @include('partials/_productsFilter')

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
