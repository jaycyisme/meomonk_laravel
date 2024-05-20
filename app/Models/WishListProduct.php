<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishListProduct extends Model
{
    use HasFactory;

    protected $table = 'wishlist_product';
    protected $fillable = ['wishlist_id', 'product_id'];
}
