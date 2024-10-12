<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


/**
 * @mixin Builder
 */
class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_count'
    ];

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}
