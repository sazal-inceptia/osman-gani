<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'key_takeaways' => 'array',
            'is_popular' => 'boolean',
            'sort_order' => 'integer',
        ];
    }
}
