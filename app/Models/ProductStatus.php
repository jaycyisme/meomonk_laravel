<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    use HasFactory;
    protected $table = 'product_status';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
}
