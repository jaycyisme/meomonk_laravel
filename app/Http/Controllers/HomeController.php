<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::where('is_active', 1)->get();
        $product = Product::where('is_active', 1)->get();
        return view('.petshop.fastkart.front-end.index', compact('categories', 'product'));
    }
}
