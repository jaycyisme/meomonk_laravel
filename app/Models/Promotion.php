<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $table = 'promotion';
    protected $primaryKey = 'id';
    protected $fillable = ['percent', 'type', 'start_time', 'end_time', 'description', 'name', 'rank_customer_id'];
}
