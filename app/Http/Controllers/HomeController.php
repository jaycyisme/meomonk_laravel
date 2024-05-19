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
        $products = Product::where('is_active', 1)->get();
        $food_products = Product::where('category_id', 3)
                        ->orWhere('category_id', 4)
                        ->get();
        $toy_products = Product::where('category_id', 5)
                        ->where('is_active', 1)
                        ->get();
        $pharmacy_products = Product::where('category_id', 6)
                         ->where('is_active', 1)
                        ->get();
        $service_products = Product::where('category_id', 7)
                        ->where('is_active', 1)
                        ->get();

        return view('.petshop.fastkart.front-end.index', compact('categories', 'products', 'food_products', 'brands', 'food_products', 'toy_products', 'pharmacy_products', 'service_products'));
    }

    public function search(Request $request) {
        $keywords = $request->keywords_submit;
        $search_product = Product::where('name', 'like', '%'.$keywords.'%')->get();

        return view('.petshop.fastkart.front-end.search', compact('keywords', 'search_product'));
    }
}
