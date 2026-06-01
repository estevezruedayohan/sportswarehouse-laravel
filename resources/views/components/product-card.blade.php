<a href="{{ route('product.show', $product->id) }}" class="gallery-card-link">
  <article class="gallery__item gallery-card">
    <div class="gallery-card__photo-frame full-centred">
      <img src="{{ $product->imageUrl }}" alt="Image of {{ $product->name }}" class="gallery-card__photo" />
    </div>
    <div class="gallery-card__prices full-centred">
      @if ($product->saleprice)
        <div class="offer-prices full-centred">
          <span class="gallery-card__discounted-price">
            ${{ number_format($product->saleprice, 2, '.', ',') }} </span>
          <span class="gallery-card__previous-price">
            WAS <span>${{ number_format($product->price, 2, '.', '.') }}</span>
          </span>
        </div>
      @else
        <span class="gallery-card__normal-price">${{ number_format($product->price, 2, '.', ',') }}</span>
      @endif

    </div>
    <h3 class="gallery-card__product-name">
      {{ $product->name }}
    </h3>
  </article>
</a>
