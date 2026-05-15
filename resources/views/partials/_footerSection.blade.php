<div class="footer-content-container">
  <nav class="footer-nav" aria-label="Footer Navigation">
    <h2 class="footer-links__title">Site Navigation</h2>
    @include('partials._footerNavigation')
  </nav>

  <div class="footer-nav-products-categories">
    <h2 class="footer-links__title">Information</h2>
    @include('partials._footerProductsCategories')
  </div>

  <div class="footer-section-social">
    <h2 class="footer-links__title">Contact Sports Warehouse</h2>
    <div class="container-footer-social-links">
    @include('partials._footerSocialMedia')
    </div>
  </div>
</div>
