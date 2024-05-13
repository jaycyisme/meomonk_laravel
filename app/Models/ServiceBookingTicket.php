<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceBookingTicket extends Model
{
    use HasFactory;
    protected $table = 'service_booking_ticket';
    protected $primaryKey = 'id';
    protected $fillable = ['total_money', 'create_time', 'user_id', 'update_time', 'bill_status_id'];
}
