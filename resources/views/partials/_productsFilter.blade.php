<div class="cat-navigation">
  <ul class="cat-links" aria-label="Product Categories">
    @foreach (config('common.productsCategories') as $category)
      <li class="cat-navigation-item">
        <a href="{{ $category['url'] }}">{{ $category['name'] }}</a>
      </li>
    @endforeach
  </ul>
</div>
