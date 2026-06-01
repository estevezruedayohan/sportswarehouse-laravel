<div class="nav-content-container">
  <div class="nav-toggle-wrapper">
    <input type="checkbox" id="nav-toggle" class="nav-toggle" hidden>
    <label for="nav-toggle" id="nav-toggle-label" class="nav-toggle-label">

      <i class="fa-solid fa-bars" id="menu-icon-bars" aria-hidden="true"></i>
      <i class="fa-solid fa-xmark" id="menu-icon-x" aria-hidden="true"></i>
      <span class="visually-hidden">Toggle Menu</span>

    </label>
    <div class="mobile-nav-wrapper" id="mobile-nav-list" aria-hidden="true">
      <ul class="mobile-nav__list">
        @foreach (config('common.mobileNavLinks') as $linkHref => $linkText)
          <li class="site-nav__item"><a href="{{ route($linkHref) }}">{{ $linkText }}</a></li>
        @endforeach
      </ul>

    </div>
  </div>

  <ul class="desktop-nav__list">
    @foreach (config('common.desktopNavLinks') as $linkHref => $linkText)
      @if ($linkHref === 'login')
        <li class="site-nav__item">
          <a href="{{ route($linkHref) }}" aria-label="User login" class="login-link">
            <i class="fa-solid fa-lock" aria-hidden="true"></i>
            {{ $linkText }}
          </a>
        </li>
      @else
        <li class="site-nav__item"><a href="{{ route($linkHref) }}">{{ $linkText }}</a></li>
      @endif
    @endforeach
  </ul>

  <div class="right-nav">
    <a href="#" aria-label="View shopping cart" class="cart-link">
      <i class="fa-solid fa-shopping-cart" aria-hidden="true"></i>
      <span>View Cart</span>
      <span class="cart-count"> 0 items</span>
    </a>
  </div>

</div>
