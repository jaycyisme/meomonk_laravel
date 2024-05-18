<?php

namespace App\Http\Controllers;

use App\Models\Bill;
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
        $selectedYearsnow = date('Y');
        $currentTime = Carbon::now();
        $bills = Bill::where('is_active', 1)->get();
        $totalBills = $bills->count();
        $totalMoney = Bill::where('is_active', 1)->sum('total_money');


        $user = User::where('is_active', 1)->get();
        $totalActiveUsers = User::where('is_active', 1)->count();



        $totalAmounts = [];

        for ($month = 1; $month <= 12; $month++) {
            $billmonth = Bill::where('is_active', 1)
                            ->whereYear('create_time', $selectedYear) // Chỉ lấy hóa đơn trong năm đã chọn
                            ->whereMonth('create_time', $month)
                            ->get();

            $totalAmount = 0;

            foreach ($billmonth as $bill) {
                $totalAmount += $bill->total_money;
            }

            $totalAmounts[$month] = $totalAmount;
        }

        // dd( $selectedYears);


        return view('admin.back-end.body-index', compact('products', 'totalQuantity','totalBills','totalMoney', 'totalActiveUsers', 'totalAmounts','selectedYear' ));
        // return view('admin.back-end.add-new-product', compact('attributes'));
    }
}
