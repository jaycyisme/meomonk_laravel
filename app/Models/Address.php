<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'address';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','address_line_1','city','zip_code','is_default'];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
