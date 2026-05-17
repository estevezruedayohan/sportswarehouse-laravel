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
      [
        'url' => '#',
        'name' => 'Shoes',
      ],
      [
        'url' => '#',
        'name' => 'Helmets',
      ],
      [
        'url' => '#',
        'name' => 'Pants',
      ],
      [
        'url' => '#',
        'name' => 'tops',
      ],
      [
        'url' => '#',
        'name' => 'Balls',
      ],
      [
        'url' => '#',
        'name' => 'Equipment',
      ],
      [
        'url' => '#',
        'name' => 'Training Gear',
      ],
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

    // Products
    'products'=> [
      [
        'image' => 'prod-image.jpg',
        'alt' => 'Adidas Euro 16 Top Soccer Ball',
        'normal_price' => 46.00,
        'discount' => 15,
        'discounted_price' => 34.95,
        'product_name' => 'adidas Euro16 Top Soccer Ball',
      ],
      [
        'image' => 'helmet.jpg',
        'alt' => 'Pro-tec Classic Skate Helmet',
        'normal_price' => 70.00,
        'discount' => 0,
        'discounted_price' => 34.95,
        'product_name' => 'Pro-tec Classic Skate Helmet',
      ],
      [
        'image' => 'waterBottle.jpg',
        'alt' => 'Nike Sport 600ml Water Bottle',
        'normal_price' => 17.50,
        'discount' => 15,
        'discounted_price' => 15.00,
        'product_name' => 'Nike Sport 600ml Water Bottle',
      ],
      [
        'image' => 'boxingGloves.jpg',
        'alt' => 'Boxing Gloves Sting ArmaPlus',
        'normal_price' => 79.95,
        'discount' => 0,
        'discounted_price' => 34.95,
        'product_name' => 'Sting ArmaPlus Boxing Gloves',
      ],
      [
        'image' => 'footyBoots.jpg',
        'alt' => 'ASICS Football boot',
        'normal_price' => 17.50,
        'discount' => 15,
        'discounted_price' => 15.00,
        'product_name' => 'Asics Gel Lethal Tigreor 8 IT Mens',
      ],
    ]
];
