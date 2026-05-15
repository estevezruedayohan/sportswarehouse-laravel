<?php



// Navigation items
$navLinks = [
  'login' => 'Login',
  '/' => 'Home',
  'aboutUs' => 'About us',
  'contactUs' => 'Contact us',
  'products' => 'View Products',
  'privacyPolicy' => 'Privacy Policy',
];

$desktopOrder = ['/', 'aboutUs', 'contactUs', 'products', 'login'];


return [

    // Desktop Navigation items
    'desktopNavLinks' => array_slice($navLinks, 1, 4) + ['login' => 'Login'],

    // Mobile Navigation links
    'mobileNavLinks' => array_slice($navLinks, 0, 5),

    // Footer navigation links
    'footerNavLinks' => array_slice($navLinks, 1, 6),

    // Products Categories

    'productsCategories' => [
      'Shoes',
      'Helmets',
      'Pants',
      'tops',
      'Balls',
      'Equipment',
      'Training Gear',
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
    ]
];
