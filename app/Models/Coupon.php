<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'coupon';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'code', 'discount', 'coupon_status_id'];

}
