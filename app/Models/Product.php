<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'have_discount',
        'discount_price',
        'discount_percentage',
        'image'
    ];

    public function categories()
    {
        // This indicates that a Product can belong to many Categories
        return $this->belongsToMany(Category::class, 'product_categories');
    }
}
