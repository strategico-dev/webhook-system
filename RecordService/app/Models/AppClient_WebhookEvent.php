<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppClient_WebhookEvent extends Model
{
    protected $table = 'app_client_webhook_event';

    protected $fillable = [
        'app_client_id', 'webhook_event_id'
    ];

    
}
