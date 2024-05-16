<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'product_attribute', 'product_id', 'attribute_id');
    }

}
