<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryHighlight extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'title', 'subtitle', 'image', 'label'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
