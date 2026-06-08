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
    <h2 aria-label="Cart Shopping" class="main-tittle">
      My Cart. You have {{ $cartProducts->sum('quantity') }} Items in your cart.
    </h2>
  </div>

  <div class="cart-container">

    <div class="cart-list">

      @forelse ($cartProducts as $product)
        <x-cart-item :product=$product />

      @empty

        <div class="gallery__empty-state">
          <div class="gallery__empty-icon">
            <i class="fa-solid fa-box-open" aria-hidden="true"></i>
          </div>
          <h3>Your cart is Empty</h3>
          <x-btn-secondary route="products.all" label="Continue Shopping" />

        </div>
      @endforelse


    </div>

    @if (session('cart') && count(session('cart')) > 0)
      <aside class="order-summary">
        <h3 class="order-summary__title">Order Summary</h3>
        <dl class="order-summary__list">
          <div class="order-summary__group">
            <dt class="order-summary__label">Subtotal {{ $cartProducts->sum('quantity') }} items</dt>
            <dd class="order-summary__value">${{ $totalCartPrice }}</dd>
          </div>
          <div class="order-summary__group">
            <dt class="order-summary__label">Shipping</dt>
            <dd class="order-summary__value">$5.00</dd>
          </div>
          <div class="order-summary__group">
            <dt class="order-summary__label">Promo Code</dt>
            <dd class="order-summary__value order-summary__value--discount">-$10.00</dd>
          </div>
          <div class="order-summary__group order-summary__group--total">
            <dt class="order-summary__label">Estimated Total</dt>
            <dd class="order-summary__value">$200 </dd>
          </div>
        </dl>
        <button type="button" class="order-summary__button">Proceed to Checkout</button>
        <x-btn-secondary route="products.all" label="Continue Shopping" />
      </aside>
    @endif

  </div>

@endsection
