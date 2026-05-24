<ul class="footer-links__list">
  @foreach ($productsCategories as $category)
    <li class="footer-links__item"><a href="#">{{ $category['name'] }}</a></li>
    {{-- TODO: --}}
    {{-- href={{ route('products.category', $categoria->id) }} --}}
  @endforeach
</ul>
