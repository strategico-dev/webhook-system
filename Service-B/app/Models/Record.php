<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $fillable = [
        'user_name', 'user_email', 'data'
    ];
}
