<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'rating' => 'float',
            'reviews_count' => 'integer',
            'is_bestseller' => 'boolean',
            'sort_order' => 'integer',
        ];
    }
}
