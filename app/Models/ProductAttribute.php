<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'product_attribute';
    protected $primaryKey = 'id';
    protected $fillable = ['attribute_id', 'product_id', 'percent'];

    // Định nghĩa mối quan hệ belongsTo với Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Định nghĩa mối quan hệ belongsTo với Attribute
    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }
}
