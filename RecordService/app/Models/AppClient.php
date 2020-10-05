<?php

namespace App\Models;

use App\Models\WebhookEvent;
use App\Models\AppClient_WebhookEvent;
use Illuminate\Database\Eloquent\Model;

class AppClient extends Model
{
    protected $fillable = [
        'name', 'url_handler'
    ];

    /**
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Builder|Model
     */
    public static function create(array $attributes = [])
    {
        $appClient = static::query()->create($attributes);
        AppClient_WebhookEvent::create($appClient->id, $attributes['selected_event']);

        return $appClient;
    }
}
