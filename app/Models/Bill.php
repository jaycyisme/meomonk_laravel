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


    public function billStatus()
    {
        return $this->belongsTo(BillStatus::class, 'bill_status_id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function billProducts()
    {
        return $this->hasMany(BillProduct::class, 'bill_id');
    }

        public function get_order()
    {
        return $this->belongsTo(User::class,'user_id');
    }




}
