<?php

namespace App\Models;

use App\Models\AppClient_WebhookEvent;
use Illuminate\Database\Eloquent\Model;

class WebhookEvent extends Model
{
    protected $fillable = [
        'name'
    ];

    public function clients()
    {
        return $this->belongsToMany(AppClient_WebhookEvent::class);
    }
}
