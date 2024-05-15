<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'category_id', 'animal_id', 'price', 'description', 'image', 'quantity', 'product_status_id', 'brand_id', 'supplier_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
