@extends('layouts.app')
@section('title', 'Product Details')
@section('content')

  <div class="product-detail-page">
    <div class="product-detail">

      <h1 class="product-detail__title">{{ $product->name }}</h1>
      <span class="product-detail__category">Category {{ $category->name }}</span>

      <div class="product-detail__media full-centred">
        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="gallery-card__photo product-detail__image">
      </div>


      <div class="product-detail__prices">
        @if ($product->saleprice)
          <div class="product-detail__price-row">
            <span class="product-detail__sale-price">${{ number_format($product->saleprice, 2) }}</span>
            <span class="product-detail__old-price">WAS <span> ${{ number_format($product->price, 2) }}</span> </span>
          </div>
        @else
          <span class="product-detail__normal-price">${{ number_format($product->price, 2) }}</span>
        @endif
      </div>

      <div class="product-detail__description">
        <h3>Description</h3>
        <p>{{ $product->description }}</p>
      </div>

      <!-- Creative action buttons -->
      <div class="product-detail__actions">
        <button class="btn-primary">Add to Cart</button>
        <x-btn-secondary route="products.all" label="Back to Products" />
      </div>

    </div>

  </div>

@endsection
