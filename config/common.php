<?php



// Navigation items
$navLinks = [
  'login' => 'Login',
  'home' => 'Home',
  'about.show' => 'About us',
  'contact.show' => 'Contact us',
  'products.all' => 'View Products',
  'privacy.show' => 'Privacy Policy',
];

// $desktopOrder = ['/', 'aboutUs', 'contactUs', 'products', 'login'];


return [

  // Desktop Navigation items
  // 'desktopNavLinks' => array_slice($navLinks, 1, 4) + ['login' => 'Login'],
  'desktopNavLinks' => [
    'home'         => 'Home',
    'about.show'   => 'About us',
    'contact.show' => 'Contact us',
    'products.all' => 'View Products',
    'login'        => 'Login',
  ],

  // Mobile Navigation links
  // 'mobileNavLinks' => array_slice($navLinks, 0, 5),
  'mobileNavLinks' => [
    'login'        => 'Login',
    'home'         => 'Home',
    'about.show'   => 'About us',
    'contact.show' => 'Contact us',
    'products.all' => 'View Products',
  ],

  // Footer navigation links
  // 'footerNavLinks' => array_slice($navLinks, 1, 6),
  'footerNavLinks' => [
    'home'         => 'Home',
    'about.show'   => 'About us',
    'contact.show' => 'Contact us',
    'products.all' => 'View Products',
    'login'        => 'Login',
    'privacy.show' => 'Privacy Policy',
  ],


  // Social Media
  'social_links' => [
    [
      'name' => 'Facebook',
      'url'  => 'https://facebook.com',
      'icon' => 'fa-facebook-f',
      'label' => 'Follow us on Facebook'
    ],
    [
      'name' => 'Twitter',
      'url'  => 'https://twitter.com',
      'icon' => 'fa-twitter',
      'label' => 'Follow us on Twitter'
    ],
    [
      'name' => 'Telegram',
      'url'  => 'https://t.me',
      'icon' => 'fa-telegram',
      'label' => 'Follow us on Telegram'
    ]
  ],

  // Features Brands Catalogue
  'featured_brands' => [
    [
      'image' => 'logo_nike_1.png',
      'alt' => 'Logo Nike'
    ],
    [
      'image' => 'logo_adidas_1.png',
      'alt' => 'Logo Adidas'
    ],
    [
      'image' => 'logo_skins_1.png',
      'alt' => 'Logo Skins'
    ],
    [
      'image' => 'logo_asics_1.png',
      'alt' => 'Logo Asics'
    ],
    [
      'image' => 'logo_newbalance_1.png',
      'alt' => 'Logo Newbalance'
    ],
    [
      'image' => 'logo_wilson_1.png',
      'alt' => 'Logo Wilson'
    ],
  ],

];
