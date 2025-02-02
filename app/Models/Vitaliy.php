<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


/**
 * @mixin Builder
 */
class WishList extends Model
{
    use HasFactory;

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}
