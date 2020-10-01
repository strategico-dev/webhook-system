<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'user_name', 'user_email', 'data'
    ];

    /**
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Builder|Model
     */
    public static function create(array $attributes = [])
    {
        return static::query()->create($attributes);
    }
}
