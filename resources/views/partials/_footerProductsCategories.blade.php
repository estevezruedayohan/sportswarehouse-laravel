<ul class="footer-links__list">
  @foreach (config('common.productsCategories') as $linkText)
    <li class="footer-links__item"><a href="#">{{ $linkText }}</a></li>
  @endforeach
</ul>
