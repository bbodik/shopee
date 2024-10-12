<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function category()
    {
        return $this->belongsTo(ProductCategory::class)->first();
    }
    function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    function rate()
    {
        return 5;
    }
}
