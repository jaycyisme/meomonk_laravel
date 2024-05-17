<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\Brand;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Models\ProductAttribute;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Cart $cart) {
        $cartItems = $cart->list();
        $subTotal = $this->calculateSubtotal($cartItems);

        $couponDiscount = 0;
        if (session()->has('coupon')) {
            $coupon = session('coupon');
            $couponDiscount = $coupon->discount;
        }

        $totalUSD = $subTotal - $couponDiscount;

        // Update prices based on attributes
        foreach ($cartItems as &$item) {
            $product = Product::find($item['productId']);
            if ($product) {
                $attribute = Attribute::find($item['attribute']);
                if ($attribute) {
                    $productAttribute = ProductAttribute::where('product_id', $item['productId'])
                                                        ->where('attribute_id', $attribute->id)
                                                        ->first();
                    if ($productAttribute) {
                        $item['price'] = $product->price * (1 + $productAttribute->percent / 100);
                    }
                }
            }
        }

        return view('petshop.fastkart.front-end.cart', compact('cartItems', 'subTotal', 'couponDiscount', 'totalUSD'));
    }

    private function calculateSubtotal($cartItems)
    {
        $subTotal = 0;
        foreach ($cartItems as $item) {
            $subTotal += $item['price'] * $item['quantity'];
        }
        return $subTotal;
    }

    public function add(Request $request, Cart $cart) {
        $product = Product::find($request->id);
        $quantity = $request->quantity;
        $product_attributes = $request->product_attribute;
        $cart->add($product, $quantity, $product_attributes);

        return redirect()->route('cart.index');
    }

    public function remove($id, Cart $cart) {
        $items = $cart->list();

        if(isset($items[$id])) {
            unset($items[$id]);
            session(['cart' => $items]);
        }

        return redirect()->route('cart.index');
    }

    public function applyCoupon(Request $request, Cart $cart) {
        $couponCode = $request->input('coupon_code');
        $coupon = Coupon::where('code', $couponCode)->first();

        if ($coupon && $coupon->coupon_status_id == 1) {
            $cartItems = $cart->list();
            $subTotal = $this->calculateSubtotal($cartItems);
            $couponDiscount = $coupon->discount;
            $totalUSD = $subTotal - $couponDiscount;

            session(['cart_total' => $totalUSD, 'coupon' => $coupon]);

            return redirect()->back()->with('success_message', 'Coupon applied successfully.');
        } else {
            return redirect()->back()->with('error_message', 'Invalid coupon code.');
        }
    }
}
