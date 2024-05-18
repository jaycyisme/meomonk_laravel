<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\Bill;
use App\Models\User;
use App\Models\RankCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

session_start();

class CheckoutController extends Controller
{
    public function AuthLogin() {
        $user_id = Session::get('user_id');
        if ($user_id) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login')->send();
        }
    }

    public function checkout(Cart $cart) {
        $user_id = Session::get('user_id');
        if (!$user_id) {
            return redirect()->route('login')->with('error_message', 'Please login to proceed.');
        }

        // $bill_id = session('bill');
        $bill_id  = Session::get('bill');
        // dd($bill_id);
        if ($bill_id) {
            $bill = Bill::find($bill_id);
            if ($bill && !$bill->user_id) {
                $bill->update(['user_id' => $user_id]);
            }
        }

        $cartItems = $cart->list();
        $subTotal = $this->calculateSubtotal($cartItems);
        $shipping = 8.90; // Giá trị vận chuyển cố định, bạn có thể thay đổi theo nhu cầu
        $tax = $subTotal * 0.1; // Giả sử thuế là 10% của tổng giá trị
        $couponDiscount = 0;

        if (session()->has('coupon')) {
            $coupon = session('coupon');
            $couponDiscount = $coupon->discount;
        }

        $totalUSDs = $subTotal + $shipping + $tax - $couponDiscount;

        $offers = [
            "Combo: BB Royal Almond/Badam Californian, Extra Bold 100 gm...",
            "Combo: Royal Cashew Californian, Extra Bold 100 gm + BB Royal Honey 500 gm"
        ];

        return view('petshop.fastkart.front-end.checkout', compact('cartItems', 'subTotal', 'shipping', 'tax', 'couponDiscount', 'totalUSDs', 'offers'));
    }


    public function updateBillStatus(Request $request, Cart $cart) {
        $user_id = Session::get('user_id');
        if (!$user_id) {
            return redirect()->route('login')->with('error_message', 'Please login to proceed.');
        }



        $cartItems = $cart->list();

        $subTotal = $this->calculateSubtotal($cartItems);
        $shipping = 8.90; // Giá trị vận chuyển cố định, bạn có thể thay đổi theo nhu cầu
        $tax = $subTotal * 0.0; // Giả sử thuế là 10% của tổng giá trị
        $couponDiscount = 0;

        if (session()->has('coupon')) {
            $coupon = session('coupon');
            $couponDiscount = $coupon->discount;
        }

        $totalUSDs = $subTotal + $shipping + $tax - $couponDiscount;


        $totalUSD = $request->input('cartItem');

        $bill_id  = Session::get('bill');

        // dd($bill_id);
        if ($bill_id) {
            $bill = Bill::find($bill_id);
            if ($bill && $bill->user_id) {
                $bill->is_active = true;
                $bill->total_money = $totalUSD;


                $bill->save();
            }

        }



        // Tính toán số điểm mới
        $pointIncrement = $totalUSDs / 10;

        // Lấy thông tin user từ session
        $user = User::find($user_id);
        if ($user) {
            // Cập nhật điểm mới cho user
            $user->point += $pointIncrement;
            $user->save();

            // Kiểm tra và cập nhật rank_customer_id của user
            $this->updateRankCustomer($user);
            // Session::put('bill', null);

            return redirect()->back()->with('success', 'Bill status updated successfully.');
        }

        return redirect()->back()->with('error', 'Failed to update bill status.');
    }


    private function calculateSubtotal($cartItems) {
        $subTotal = 0;
        foreach ($cartItems as $item) {
            $subTotal += $item['price'] * $item['quantity'];
        }

        return $subTotal;
    }


    private function updateRankCustomer($user) {
        // Lấy danh sách rank_customer theo thứ tự tăng dần point
        $rankCustomers = RankCustomer::orderBy('point', 'asc')->get();

        // Duyệt qua từng rank_customer
        foreach ($rankCustomers as $rankCustomer) {
            // Kiểm tra nếu point của user bằng hoặc lớn hơn point của rank_customer hiện tại
            if ($user->point >= $rankCustomer->point) {
                // Cập nhật rank_customer_id của user
                $user->rank_customer_id = $rankCustomer->id;
            }
        }

        // Lưu thay đổi vào database
        $user->save();
    }
}
