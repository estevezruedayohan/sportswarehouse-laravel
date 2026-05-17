<ul class="footer-links__list">
  @foreach (config('common.productsCategories') as $category)
    <li class="footer-links__item"><a href="{{ $category['url'] }}">{{ $category['name'] }}</a></li>
  @endforeach
</ul>
