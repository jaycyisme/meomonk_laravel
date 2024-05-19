<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'category_id', 'animal_id', 'price', 'description', 'image','thumbnail1','thumbnail2','thumbnail3','thumbnail4', 'quantity', 'product_status_id', 'brand_id', 'supplier_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Định nghĩa mối quan hệ belongsTo với Animal
    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }

    // Định nghĩa mối quan hệ belongsTo với Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // Định nghĩa mối quan hệ belongsTo với ProductStatus
    public function productStatus()
    {
        return $this->belongsTo(ProductStatus::class, 'product_status_id');
    }

    // Định nghĩa mối quan hệ belongsTo với Supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function product_attributes()
    {
        return $this->belongsToMany(Attribute::class, 'product_attribute', 'product_id', 'attribute_id');
    }

    public function billProducts()
    {
        return $this->hasMany(BillProduct::class, 'product_id');
    }

    public static function topFourFoodProducts()
    {
        return self::select('bp.product_id', DB::raw('SUM(bp.quantity) as total_quantity'))
            ->join('bill_product as bp', 'product.id', '=', 'bp.product_id')
            ->join('product as p', 'bp.product_id', '=', 'p.id')
            ->whereIn('p.category_id', [3, 4])
            ->groupBy('bp.product_id')
            ->orderByDesc('total_quantity')
            ->limit(4)
            ->get();
    }

    public static function topFourPharmacyProducts()
    {
        return self::select('bp.product_id', DB::raw('SUM(bp.quantity) as total_quantity'))
            ->join('bill_product as bp', 'product.id', '=', 'bp.product_id')
            ->join('product as p', 'bp.product_id', '=', 'p.id')
            ->where('p.category_id', 6)
            ->groupBy('bp.product_id')
            ->orderByDesc('total_quantity')
            ->limit(4)
            ->get();
    }

    public static function topFourToyProducts()
    {
        return self::select('bp.product_id', DB::raw('SUM(bp.quantity) as total_quantity'))
            ->join('bill_product as bp', 'product.id', '=', 'bp.product_id')
            ->join('product as p', 'bp.product_id', '=', 'p.id')
            ->where('p.category_id', 5)
            ->groupBy('bp.product_id')
            ->orderByDesc('total_quantity')
            ->limit(4)
            ->get();
    }

    public function saleQuantity()
    {
        return BillProduct::where('product_id', $this->id)->sum('quantity');
    }

}
