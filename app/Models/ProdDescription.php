<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdDescription extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'order', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
