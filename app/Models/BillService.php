<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillService extends Model
{
    use HasFactory;
    protected $table = 'bill_service';
    protected $primaryKey = 'id';
    protected $fillable = ['ticket_id', 'service_id', 'using_time', 'address'];
}
