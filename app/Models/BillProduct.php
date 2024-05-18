<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BillProduct extends Model
{
    use HasFactory;
    protected $table = 'bill_product';
    protected $primaryKey = 'id';
    protected $fillable = ['bill_id', 'product_id', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');

    }
    public function bill()
    {
        return $this->belongsTo(Bill::class, 'bill_id');

    }

    public static function topFiveProducts($year)
    {
        return self::select('product_id', DB::raw('SUM(quantity) as total_quantity'))
            ->join('bill', 'bill_product.bill_id', '=', 'bill.id')
            ->whereYear('bill.create_time', $year)
            ->groupBy('product_id')
            ->orderByDesc('total_quantity')
            ->limit(4)
            ->get();
    }
    // public static function  topFiveProducts($limit = 5)
    // {
    //     return self::select('product_id')
    //         ->selectRaw('SUM(quantity) as total_quantity')
    //         ->groupBy('product_id')
    //         ->orderBy('total_quantity', 'DESC')
    //         ->limit($limit)
    //         ->get();
    // }
}
