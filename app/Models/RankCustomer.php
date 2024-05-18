<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RankCustomer extends Model
{
    use HasFactory;
    protected $table = 'rank_customer';
    protected $primaryKey = 'id';
    protected $fillable = ['point', 'description', 'name'];

    public function users()
    {
        return $this->hasMany(User::class, 'rank_customer_id');
    }
}
