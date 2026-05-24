<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
      // Registering the View Composer for the footer file
        View::composer('partials._footerProductsCategories', function ($view) {
          $view->with('productsCategories', Category::all());
        });
    }
}
