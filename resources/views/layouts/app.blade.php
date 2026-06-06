<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'SP') - Sports Warehouse</title>
  <link href="https://cdn.jsdelivr.net/npm/modern-normalize@3.0.1/modern-normalize.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  @vite(['resources/css/app.css'])
</head>

<body>
  <div class="site-wrapper">
    <nav class="site-nav">
      @include('partials._navigationSection')
    </nav>

    <header class="site-header">
      <div class="site-header__brand">
        <h1 aria-label="Company Name" class="site-header__logo">
          <img aria-hidden="true" src="{{ asset('images/statics/sports-warehouse-logo.svg') }}" alt="Company Name logo">
        </h1>
        {{-- Reserved space --}}
        @stack('header-search')
      </div>

      {{-- Reserved space --}}
      @stack('header-filters-byCategory')
    </header>

    <main class="site-main">
      @if (session()->has('message'))
        <!-- 1. Check if the controller sent a load called "message" -->
        <div class="flash-alert flash-alert--success" role="alert">
          <div class="flash-alert__icon">
            <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
          </div>
          <div class="flash-alert__content">
            <!-- 2. Render the exact text sent by the controller ("Product added to the Cart successfully! ") -->
            <p>{{ session('message') }}</p>
          </div>
        </div>
      @endif
      @yield('content')

    </main>

    <footer class="site-footer">
      @include('partials._footerSection')
    </footer>

    <div class="copyrights-section full-centred">
      @include('partials._copyrightsSection')
    </div>
  </div>
</body>

</html>
