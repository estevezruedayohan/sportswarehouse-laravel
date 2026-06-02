<search>
  <form class="search-wrapper" action="{{ route('product.search') }}" method="GET">
    {{-- <label for="search-input" aria-label="Find a Product"></label> --}}
    <input type="search" class="search-input" name="query" value="{{ request('query') }}" placeholder="Search products"
      aria-label="Enter the name of the product">
    <button type="submit" class="search-button" aria-label="Submit search">
      <i class="fa fa-search" aria-hidden="true"></i>
    </button>
  </form>
</search>
