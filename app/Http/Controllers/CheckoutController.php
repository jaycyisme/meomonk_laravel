<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\Bill;
use App\Models\User;
use App\Models\RankCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
session_start();

class CheckoutController extends Controller
{
    public function AuthLogin() {
        $user_id = Session::get('user_id');
        if($user_id) {
            return redirect()->route('index');
        }else {
            return redirect()->route('login')->send();
        }
    }

    public function checkout(Cart $cart) {
        $this->AuthLogin();
        $user_id = Session::get('user_id');
        if (!$user_id) {
            return redirect()->route('login')->with('error_message', 'Please login to proceed.');
        }

        $bill_id = session('bill');
        if ($bill_id) {
            $bill = Bill::find($bill_id);
            if ($bill && !$bill->user_id) {
                $bill->update(['user_id' => $user_id]);
            }
        }

        $cartItems = $cart->list();
        $subTotal = $this->calculateSubtotal($cartItems);

        $couponDiscount = 0;
        if (session()->has('coupon')) {
            $coupon = session('coupon');
            $couponDiscount = $coupon->discount;
        }

        $totalUSD = $subTotal - $couponDiscount;

        return view('petshop.fastkart.front-end.checkout', compact('cartItems', 'subTotal', 'couponDiscount', 'totalUSD'));
    }

    private function calculateSubtotal($cartItems) {
        $subTotal = 0;
        foreach ($cartItems as $item) {
            $subTotal += $item['price'] * $item['quantity'];
        }
        return $subTotal;
    }

    public function payment(Request $request, Cart $cart) {
        $user_id = Session::get('user_id');
        if (!$user_id) {
            return redirect()->route('login')->with('error_message', 'Please login to proceed.');
        }

        $bill_id = session('bill');
        if ($bill_id) {
            $bill = Bill::find($bill_id);
            if ($bill && !$bill->is_active) {
                // Cập nhật bill
                $bill->update(['is_active' => true, 'update_time' => now()]);

                // Lấy total_money và tính toán điểm thưởng
                $total_money = $bill->total_money;
                $points_earned = $total_money / 10;

                // Cập nhật điểm thưởng cho người dùng
                $user = User::find($user_id);
                $user->point += $points_earned;

                // Kiểm tra và cập nhật rank_customer_id nếu cần
                $ranks = RankCustomer::orderBy('point', 'asc')->get();
                foreach ($ranks as $rank) {
                    if ($user->point >= $rank->point) {
                        $user->rank_customer_id = $rank->id;
                    }
                }

                $user->save();
            }
        }

        // Clear the session for bill and cart
        session()->forget('bill');
        session()->forget('cart');

        return redirect()->route('index')->with('success_message', 'Payment successful.');
    }

}
