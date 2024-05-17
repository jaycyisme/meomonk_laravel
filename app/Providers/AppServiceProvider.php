<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Product;
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
        $categories_products = Category::where('is_active', true)->get();
        foreach ($categories_products as $category_product) {
            $category_product->products = Product::where('category_id', $category_product->id)->get();
        }
        $products = Product::where('is_active', true)
                              ->get();

        // Share the data with all views that use 'app' as their layout
        view()->composer('petshop.fastkart.front-end.app', function ($view) use ($brands, $categories, $categories_products, $products) {
            $view->with(compact('brands', 'categories', 'categories_products', 'products'));
        });
    }
}
