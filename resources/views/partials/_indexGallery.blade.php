  <div class="gallery">
    @foreach (config('common.products') as $product)
      <article class="gallery__item gallery-card">
        <div class="gallery-card__photo-frame full-centred">
          <img src="{{ asset('images/products/' . $product['image']) }}" alt="{{ $product['alt'] }}"
            class="gallery-card__photo" />
        </div>
        <div class="gallery-card__prices full-centred">
          @if ($product['discount'] > 0)
            <div class="offer-prices full-centred">
              <span class="gallery-card__discounted-price"> ${{ $product['discounted_price'] }} </span>
              <span class="gallery-card__previous-price">
                WAS <span>${{ $product['normal_price'] }}</span>
              </span>
            </div>
          @else
            <span class="gallery-card__normal-price">${{ $product['normal_price'] }}</span>
          @endif

        </div>
        <h3 class="gallery-card__product-name">
          {{ $product['product_name'] }}
        </h3>
      </article>
    @endforeach
  </div>
