<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $table = 'product_attribute';
    protected $primaryKey = 'id';
    protected $fillable = ['attribute_id', 'product_id', 'percent', 'quantity'];
}