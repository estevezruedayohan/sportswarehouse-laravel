<ul class="footer-links__list">
  @foreach ($productsCategories as $category)
    <li class="footer-links__item"><a href="{{ route('product.category', $category->id) }}">{{ $category->name }}</a>
    </li>
  @endforeach
</ul>
