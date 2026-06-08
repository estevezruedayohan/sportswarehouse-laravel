  <article class="cart-item">
    <div class="cart-item__media full-centred">
      <img src="{{ $product->imageUrl }}" alt="Image of {{ $product->name }}" class="card-item__photo">
    </div>
    <div class="cart-item__details">
      <h3 class="cart-item__name">
        {{ $product->name }}
      </h3>
      <span class="cart-item__category">Category {{ $product->category->name }}</span>

      <div class="cart-item__prices">
        @if ($product->saleprice)
          <div class="cart-item__offer-prices">
            <span class="cart-item__discounted-price">
              ${{ number_format($product->saleprice, 2, '.', ',') }} </span>
            </span>
            <span class="cart-item__previous-price">
              WAS
              <span>
                {{ number_format($product->price, 2, '.', '.') }}
              </span>
            </span>
          </div>
        @else
          <span class="cart-item__normal-price">
            {{ number_format($product->price, 2, '.', ',') }}
          </span>
        @endif
      </div>

      <div class="cart-item__actions">
        <div class="cart-item__quantity-selector">
          <button type="button" class="stepper-btn btn-minus">
            &minus;
          </button>
          <div class="cart-item__quantity stepper-value">
            <span>
              {{ $product->quantity }}
            </span>
          </div>
          <button type="button" class="stepper-btn btn-plus">
            &plus;
          </button>
        </div>

        <form action="{{ route('cart.remove', $product->id) }}" method="POST" class="cart-item__submit">
          @csrf
          @method('delete')
          <button type="submit" class="btn-primary btn-remove"> <i class="fa-regular fa-trash-can"
              aria-hidden="true"></i>
            Remove</button>
        </form>
      </div>
    </div>
  </article>
