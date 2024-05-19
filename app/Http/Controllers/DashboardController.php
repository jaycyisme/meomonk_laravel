<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\BillProduct;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{

    public function index(Request $request){
        $selectedYear = $request->input('year', date('Y'));
        $products = Product::where('is_active', 1)->get();
        $totalQuantity = $products->sum('quantity');

        $bills = Bill::where('is_active', 1)
        ->whereYear('create_time', $selectedYear)
        ->get();
        $totalBills = $bills->count();
        $totalMoney = $bills->sum('total_money');

        $user = User::where('is_active', 1)->get();
        $totalActiveUsers = User::where('is_active', 1)->count();

        $totalBills = $bills->count();
        $totalAmounts = [];
        $totalOrder = [];

        for ($month = 1; $month <= 12; $month++) {
            $billmonth = Bill::where('is_active', 1)
                            ->whereYear('create_time', $selectedYear)
                            ->whereMonth('create_time', $month)
                            ->get();

            $totalAmount = 0;

            foreach ($billmonth as $bill) {
                $totalAmount += $bill->total_money;
            }

            $totalAmounts[$month] = $totalAmount;

            $orderbil = Bill::where('is_active', 1)
                            ->whereYear('create_time', $selectedYear)
                            ->whereMonth('create_time', $month)
                            ->count();

            $totalOrder[$month] = $orderbil;
        }
        // dd( $selectedYears);

        $topProducts = BillProduct::topFiveProducts($selectedYear);

        $categories = Category::where('is_active', 1)->get();

        return view('admin.back-end.body-index', compact('products', 'totalQuantity','totalBills','totalMoney', 'totalActiveUsers', 'totalAmounts','selectedYear','topProducts','totalOrder' ,'categories'));
        // return view('admin.back-end.add-new-product', compact('attributes'));
    }
}
