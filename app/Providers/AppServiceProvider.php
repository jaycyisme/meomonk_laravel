<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
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
        $brands = Brand::all();
        $categories = Category::where('is_active', true)
                              ->withCount('products')
                              ->get();

        // Share the data with all views that use 'app' as their layout
        view()->composer('petshop.fastkart.front-end.app', function ($view) use ($brands, $categories) {
            $view->with(compact('brands', 'categories'));
        });
    }
}
