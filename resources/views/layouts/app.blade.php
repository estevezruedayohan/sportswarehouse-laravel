<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'SP') - Sports Warehouse</title>
  <link href="https://cdn.jsdelivr.net/npm/modern-normalize@3.0.1/modern-normalize.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  {{-- <link rel="stylesheet" href="styles/styles.css"> --}}
  @vite(['resources/css/app.css'])
</head>

<body>
  <div class="site-wrapper">
    <nav class="site-nav">
      <?php // include "_navigationSection.html.php"; ?>
    </nav>

    <header class="site-header">
      <div class="site-header__brand">
        <h1 aria-label="Company Name" class="site-header__logo">
          <img aria-hidden="true" src="images/statics/sports-warehouse-logo.svg" alt="Company Name logo">
        </h1>

      </div>
    </header>

    <main class="site-main">
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
