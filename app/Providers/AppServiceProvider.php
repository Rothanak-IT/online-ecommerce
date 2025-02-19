<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Product;
<<<<<<< HEAD
=======
use App\Models\Category;
use App\Models\Customer;
>>>>>>> 628828431eb88ea95287107e6c4da5db85ed41e3
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
    

public function boot()
{
    view()->composer('layouts.navbar', function ($view) {
        $view->with('product', Product::all());
    });
    view()->composer('formCategory', function ($view) {
        $view->with('category', Category::all());
    });
    view()->composer('customer', function ($view) {
        $view->with('customer', Customer::all());
    });
   
}

}
