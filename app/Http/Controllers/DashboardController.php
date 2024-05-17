<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index(){

        $products = Product::where('is_active', 1)->get();
        $totalQuantity = $products->sum('quantity');
        return view('admin.back-end.body-index', compact('products', 'totalQuantity'));
        // return view('admin.back-end.add-new-product', compact('attributes'));
    }
}
