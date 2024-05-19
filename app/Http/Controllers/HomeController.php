<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::where('is_active', 1)->get();
        $brands = Brand::all();
        $products = Product::where('is_active', 1)
                        ->where('product.quantity', '>', 0)
                        ->get();
        $food_products = Product::where('category_id', 3)
                        ->orWhere('category_id', 4)
                        ->get();
                        $food_products = Product::select('product.*', DB::raw('SUM(bill_product.quantity) as total_quantity'))
                        ->join('bill_product', 'product.id', '=', 'bill_product.product_id')
                        ->whereIn('product.category_id', [3, 4])
                        ->where('product.is_active', 1)
                        ->where('product.quantity', '>', 0)
                        ->groupBy('product.id')
                        ->orderByDesc('total_quantity')
                        ->take(4)
                        ->get();

        $toy_products = Product::select('product.*', DB::raw('SUM(bill_product.quantity) as total_quantity'))
                        ->join('bill_product', 'product.id', '=', 'bill_product.product_id')
                        ->where('product.category_id', 5)
                        ->where('product.is_active', 1)
                        ->where('product.quantity', '>', 0)
                        ->groupBy('product.id')
                        ->orderByDesc('total_quantity')
                        ->take(4)
                        ->get();

        $pharmacy_products = Product::select('product.*', DB::raw('SUM(bill_product.quantity) as total_quantity'))
                        ->join('bill_product', 'product.id', '=', 'bill_product.product_id')
                        ->where('product.category_id', 6)
                        ->where('product.is_active', 1)
                        ->where('product.quantity', '>', 0)
                        ->groupBy('product.id')
                        ->orderByDesc('total_quantity')
                        ->take(4)
                        ->get();

        $service_products = Product::where('category_id', 7)
                        ->where('is_active', 1)
                        ->get();

        return view('.petshop.fastkart.front-end.index', compact('categories', 'products', 'food_products', 'brands', 'food_products', 'toy_products', 'pharmacy_products',
         'service_products'));
    }

    public function search(Request $request) {
        $keywords = $request->keywords_submit;
        $search_product = Product::where('name', 'like', '%'.$keywords.'%')
                                    ->where('product.quantity', '>', 0)
                                    ->get();

        return view('.petshop.fastkart.front-end.search', compact('keywords', 'search_product'));
    }
}
