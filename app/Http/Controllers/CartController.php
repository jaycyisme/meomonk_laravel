<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use App\Models\Bill;
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
// dd($subTotal);
        return $subTotal;
    }


    public function add(Request $request, Cart $cart) {

        $product = Product::find($request->id);

        $attribute = Attribute::find($request->attribute);

        if ($request->has('attribute')) {

            $attribute_id = $request->input('attribute');
        } else {
            $productAttribute = ProductAttribute::where('product_id', $request->id)->first();
            $attribute_id = $productAttribute->attribute_id;
        }


        if ($request->has('attribute')) {
            $attribute = Attribute::find($request->attribute);
            $productAttribute = ProductAttribute::where('product_id', $request->id)
                                                ->where('attribute_id', $attribute_id)
                                                ->first();
        } else {
            // Lấy attribute đầu tiên của ProductAttribute
            $productAttribute = ProductAttribute::where('product_id', $request->id)->first();
            if ($productAttribute) {
                $attribute = Attribute::find($productAttribute->attribute_id);
            } else {
                // Handle the case where there is no product attribute
                // You might want to add some error handling or default behavior here
                return redirect()->back()->with('error_message', 'No attribute available for this product.');
            }
        }

        if (!$product || !$productAttribute) {
            return redirect()->back()->with('error_message', 'Product or attribute not found.');
        }

        $percent = $productAttribute->percent;

        $attributeName = $attribute->value;
        // dd($percent);

        $quantity = $request->has('quantity') ? $request->quantity : 1;
        $attribute = $request->attribute;

        $bill_id = session('bill');

        if (!$bill_id || Bill::find($bill_id)->is_active) {
            $bill = Bill::create([
                'total_money' => 0,  // Initially 0, will be updated later
                'trading_code' => uniqid(),  // Generate a unique trading code
                'create_time' => now(),
                'update_time' => now(),
                'bill_status_id' => 1,  // Assuming 1 is the default status
                'payment_method_id' => 1,  // Assuming 1 is the default payment method
                'is_active' => false,
            ]);
            session(['bill' => $bill->id]);
        } else {
            $bill = Bill::find($bill_id);
        }

        // Thêm BillProduct
        $bill->billProducts()->create([
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price,
        ]);

        $cart->add($product, $quantity, $attribute_id , $percent, $attributeName);



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
