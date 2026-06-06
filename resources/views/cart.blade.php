@extends('layouts.app')
@push('header-search')
  @include('partials._productsSearch')
@endpush
@push('header-filters-byCategory')
  @include('partials._productsFilter')
@endpush

@section('title', 'Cart')
@section('content')

  <div class="main-tittle-container">
    <h2 aria-label="Products list" class="main-tittle">
      My Cart. You have {{ $cartProducts->sum('quantity') }} Items in your cart. Total $ {{ $totalCartPrice }}
    </h2>
  </div>

  {{-- <div class="gallery">

    @forelse ($cartProducts as $product)
      <x-product-card :product=$product />

    @empty

      <div class="gallery__empty-state">
        <div class="gallery__empty-icon">
          <i class="fa-solid fa-box-open" aria-hidden="true"></i>
        </div>
        <h3>No products found</h3>
        @if (request()->routeIs('product.search'))
          <p>We couldn't find any match for your search term <strong>"{{ request('query') }}"</strong>. Please check your
            spelling or tray another keyword.</p>
        @else
          <p>There are currently no sports products available in the <strong>"{{ $searchTitle }}"</strong>. Check back
            soon!</p>
        @endif
        <x-btn-secondary route="products.all" label="Continue Shopping" />
      </div>
    @endforelse

  </div> --}}

@endsection
