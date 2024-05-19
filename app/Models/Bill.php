<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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


    public static function topFiveUsersByTotalMoney($year)
    {
        return self::select('user_id', DB::raw('SUM(total_money) as total_spent'))
        ->where('is_active', 1)
        ->whereYear('create_time', $year)
        ->groupBy('user_id')
        ->orderByDesc('total_spent')
        ->limit(5)
        ->with('user')
        ->get();
    }

}
