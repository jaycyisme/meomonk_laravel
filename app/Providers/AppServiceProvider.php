<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Helper\Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();

        $brands = Brand::all();
        $categories = Category::where('is_active', true)
                              ->withCount('products')
                              ->get();

        $categories_products = Category::where('is_active', true)->get();
        foreach ($categories_products as $category_product) {
            $category_product->products = Product::where('category_id', $category_product->id)->get();
        }
        $products = Product::where('is_active', true)->get();

        view()->composer('petshop.fastkart.front-end.app', function ($view) use ($brands, $categories, $categories_products, $products) {
            $view->with(compact('brands', 'categories', 'categories_products', 'products'));
        });

        // Share cart data with all views
        view()->composer('*', function ($view) {
            $cart = app(Cart::class);  // get the Cart instance
            $cartItems = $cart->list();
            $subTotal = $this->calculateSubtotal($cartItems);
            $couponDiscount = session()->has('coupon') ? session('coupon')->discount : 0;
            $totalUSD = $subTotal - $couponDiscount;

            $view->with(compact('cartItems', 'subTotal', 'couponDiscount', 'totalUSD'));
        });
    }

    private function calculateSubtotal($cartItems)
    {
        $subTotal = 0;
        foreach ($cartItems as $item) {
            $subTotal += $item['price'] * $item['quantity'];
        }
        return $subTotal;
    }
}
