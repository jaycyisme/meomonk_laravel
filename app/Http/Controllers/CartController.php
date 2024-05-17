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
session_start();


class CartController extends Controller
{

    public function index(Cart $cart) {
        $cartItems = $cart->list();
        $subTotal = $this->calculateSubtotal($cartItems);
        $couponDiscount = $this->calculateCouponDiscount($subTotal, 'COUPON_CODE_HERE');
        $totalUSD = $subTotal - $couponDiscount;

        // Update prices based on attributes
        foreach ($cartItems as &$item) {
            $product = Product::find($item['productId']);
            if ($product) {
                $attribute = Attribute::find($item['attribute']);
                if ($attribute) {
                    // Tìm product attribute tương ứng
                    $productAttribute = ProductAttribute::where('product_id', $item['productId'])
                                                        ->where('attribute_id', $attribute->id)
                                                        ->first();
                    if ($productAttribute) {
                        // $originalPrice = $item['price'];
                        // Tính toán giá mới dựa trên giá gốc và phần trăm của thuộc tính
                        // $item['price'] = $product->price * (1 + $productAttribute->percent / 100);
                        // echo "Product ID: " . $product->id . ", Original Price: " . $originalPrice . ", Price with Attribute: " . $item['price'] . "<br>";
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

    private function calculateCouponDiscount($subTotal, $couponCode)
    {
        $couponDiscount = 0;
        if ($couponCode) {
            $coupon = Coupon::where('code', $couponCode)->first();
            if ($coupon) {
                $couponDiscount = $coupon->discount;
            }
        }
        return $couponDiscount;
    }

    public function add(Request $request, Cart $cart) {
        $product = Product::find($request->id);
        $quantity = $request->quantity;
        $attribute = $request->attribute;
        $cart->add($product, $quantity, $attribute);

        return redirect()->route('cart.index');
        dd($attribute);
    }

    public function remove($id, Cart $cart) {
        // Lấy danh sách sản phẩm từ giỏ hàng
        $items = $cart->list();

        // Kiểm tra xem sản phẩm có tồn tại trong giỏ hàng không
        if(isset($items[$id])) {
            // Xóa sản phẩm khỏi giỏ hàng
            unset($items[$id]);
            // Cập nhật lại session giỏ hàng
            session(['cart' => $items]);
        }

        return redirect()->route('cart.index');
    }
}
