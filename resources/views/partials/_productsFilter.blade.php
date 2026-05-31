<div class="cat-navigation">
  <ul class="cat-links" aria-label="Product Categories">
    @foreach ($productsCategories as $category)
      <li class="cat-navigation-item">
        <a href="{{ route('product.category', $category->id) }}">{{ $category['name'] }}</a>
      </li>
    @endforeach
  </ul>
</div>
