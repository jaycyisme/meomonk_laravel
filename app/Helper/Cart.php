<?php
namespace App\Helper;

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

    public function add($product, $quantity = 1, $product_attributes) {
        $item = [
            'productId' => $product->id,
            'name' => $product->name,
            'productSupplier' => $product->supplier->name,
            'price' => $product->price,
            'image' => $product->image,
            'quantity' => $quantity,
            'attribute' => $product_attributes,
        ];
        $this->items[$product->id] = $item;
        session(['cart' => $this->items]);
    }

}
