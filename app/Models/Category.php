<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
    ];

    public function products()
    {
        // This indicates that a Category can have many Products
        return $this->belongsToMany(Product::class, 'product_categories');
    }
}
