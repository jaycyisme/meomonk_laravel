<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'service_type_id', 'price', 'description', 'image', 'quantity', 'service_status_id'];
}
