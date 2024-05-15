<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::where('is_active', 1)->get();
        $products = Product::where('is_active', 1)->get();
        $food_products = Product::where('category_id', 3)
                        ->orWhere('category_id', 4)
                        ->get();
        $toy_products = Product::where('category_id', 5)
                        ->get();
        $pharmacy_products = Product::where('category_id', 6)
                        ->get();
        return view('.petshop.fastkart.front-end.index', compact('categories', 'products', 'food_products', 'toy_products', 'pharmacy_products'));
    }
}
