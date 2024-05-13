<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bill';
    protected $primaryKey = 'id';
    protected $fillable = ['total_money', 'trading_code', 'create_time', 'user_id', 'name', 'update_time', 'promotion_id', 'bill_status_id', 'payment_method_id'];
}
