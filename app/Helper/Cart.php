<?php

namespace App\Helper;

use Illuminate\Http\Request;
use App\Models\ProductAttribute;

class Cart {
    private $items = [];
    private $total_quantity = 0;
    private $total_price = 0;

    public function __construct() {
        $this->items = session('cart') ? session('cart') : [];
    }

    public function list() {
        return $this->items;
    }

    public function add($product, $quantity = 1, $attribute, $percent, $attributeName) {
        $selectedAttribute = ProductAttribute::where('product_id', $product->id)
            ->where('attribute_id', $attribute)
            ->first();

        if ($selectedAttribute) {
            $productPrice = $selectedAttribute->price;
        } else {
            // Nếu không tìm thấy giá trị thuộc tính, sử dụng giá mặc định của sản phẩm
            $productPrice = $product->price;
        }

        $item = [
            'productId' => $product->id,
            'name' => $product->name,
            'productSupplier' => $product->supplier->name,
            'price' => $productPrice, // Sử dụng giá dựa trên thuộc tính
            'image' => $product->image,
            'quantity' => $quantity,
            'attribute' => $attribute,
            'percent' => $percent,
            'attributeName' => $attributeName
        ];

        $this->items[$product->id] = $item;
        session(['cart' => $this->items]);
    }

    public function calculateSubtotal() {
        $subtotal = 0;
        foreach ($this->items as $item) {
            // Tính giá của từng sản phẩm
            $productPrice = $item['price'];
            $quantity = $item['quantity'];
            $itemTotal = $productPrice * $quantity;

            // Thêm giá của sản phẩm này vào tổng giá
            $subtotal += $itemTotal;
        }
        return $subtotal;
    }
}
