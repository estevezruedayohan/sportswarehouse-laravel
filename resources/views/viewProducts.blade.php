@extends('layouts.app')
@push('header-search')
  @include('partials._productsSearch')
@endpush
@push('header-filters-byCategory')
  @include('partials._productsFilter')
@endpush

@section('title', 'View Products')
@section('content')

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
