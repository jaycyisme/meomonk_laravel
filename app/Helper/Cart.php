<?php

namespace App\Helper;

use Illuminate\Http\Request;
use App\Models\ProductAttribute;
use App\Models\Bill;
use App\Models\BillProduct;

class Cart {
    private $items = [];

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
            $productPrice = $product->price;
        }

        $item = [
            'productId' => $product->id,
            'name' => $product->name,
            'productSupplier' => $product->supplier->name,
            'price' => $productPrice,
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
            $productPrice = $item['price'];
            $quantity = $item['quantity'];
            $itemTotal = $productPrice * $quantity;
            $subtotal += $itemTotal;
        }
        return $subtotal;
    }

    public function clear() {
        $this->items = [];
        session(['cart' => $this->items]);
    }
}
