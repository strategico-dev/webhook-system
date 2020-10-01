<?php

namespace App\Models;

use App\Models\WebhookEvent;
use Illuminate\Database\Eloquent\Model;

class AppClient extends Model
{
    protected $fillable = [
        'name', 'url_handler'
    ];
}
