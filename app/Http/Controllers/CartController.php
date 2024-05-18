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



        $prices = []; // Khởi tạo mảng $prices trống

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
                        $originalPrice = $item['price'];

                        // Tính toán giá mới dựa trên giá gốc và phần trăm của thuộc tính
                        $item['price'] = $product->price * (1 + $item['percent'] / 100);

                        // Thêm giá trị price vào mảng $prices
                        $prices[] = $item['price'];
                    }
                }
            }
        }




        $subTotals = $this->calculateSubtotal($cartItems);
        // $couponDiscount = $this->calculateCouponDiscount($subTotal, 'COUPON_CODE_HERE');
        $couponDiscount = 0;
        if (session()->has('coupon')) {
            $coupon = session('coupon');
            $couponDiscount = $coupon->discount;
        }
        $totalUSDs = $subTotals - $couponDiscount;

// dd($totalUSD);


        return view('petshop.fastkart.front-end.cart', compact('cartItems', 'subTotals', 'couponDiscount', 'totalUSDs','prices'));
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

        if (!$product) {
            return redirect()->back()->with('error_message', 'Product not found.');
        }

        // Lấy thông tin thuộc tính
        $attributeId = $request->attribute;
        $productAttribute = ProductAttribute::where('product_id', $product->id)
            ->where('attribute_id', $attributeId)
            ->first();

        if (!$productAttribute) {
            return redirect()->back()->with('error_message', 'Product attribute not found.');
        }

        // Tính toán giá của sản phẩm dựa trên thuộc tính
        $price = $productAttribute->price;

        // Cập nhật giỏ hàng
        $quantity = $request->has('quantity') ? $request->quantity : 1;
        $percent = $productAttribute->percent;
        $attributeName = $productAttribute->attribute->value;
        $cart->add($product, $quantity, $attributeId, $percent, $attributeName, $price);

        return redirect()->route('cart.index');
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
