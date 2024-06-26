<?php

namespace App\Providers;

use App\Helper\Cart;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\ProductAttribute;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
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

            $prices = []; // Khởi tạo mảng $prices trống

            // Update prices based on attributes
            foreach ($cartItems as &$item) {
                $product = Product::find($item['productId']);
                if ($product) {
                    $attribute = Attribute::find($item['attribute']);
                    if ($attribute) {
                        // Tìm product attribute tương ứng
                        $productAttribute = ProductAttribute::where('product_id', $item['productId'])
                                                            ->where('attribute_id', $attribute->id)
                                                            ->first();
                        if ($productAttribute) {
                            // Tính toán giá mới dựa trên giá gốc và phần trăm của thuộc tính
                            $item['price'] = $product->price * (1 + $item['percent'] / 100);
                            // Thêm giá trị price vào mảng $prices
                            $prices[] = $item['price'];
                        }
                    }
                }
            }

            $subTotal = $this->calculateSubtotal($cartItems);
            $couponDiscount = session()->has('coupon') ? session('coupon')->discount : 0;
            $totalUSD = $subTotal - $couponDiscount;

            $user = null;
            $user_id = Session::get('user_id');
            if ($user_id) {
                $user = User::find($user_id);
            }


            $view->with(compact('cartItems', 'subTotal', 'couponDiscount', 'totalUSD', 'prices', 'user'));
        });


        $id = Session::get('user_id');
        $users = User::find($id);


        view()->composer('admin.back-end.app', function ($view)  {
            $id = Session::get('user_id');
            $users = User::find($id);
            $view->with(compact('users'));
        });

        // View::composer('admin.back-end.app', function ($view) {
        //     $id = Session::get('user_id');
        //     $user = User::find($id);

        //     // Truyền dữ liệu người dùng sang view 'admin.back-end.app'
        //     $view->with('user', $user);
        // });


        // view()->composer('admin.back-end.app', function ($view) use ($users) {
        //     $view->with(compact('users'));
        // });

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
