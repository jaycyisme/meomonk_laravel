<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'icon_url', 'image_url'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
