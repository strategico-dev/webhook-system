<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppClient_WebhookEvent extends Model
{
    protected $table = 'app_client_webhook_event';

    public $timestamps = false;

    protected $fillable = [
        'app_client_id', 'webhook_event_id'
    ];

    /**
     * @param int $idAppClient
     * @param array $selectedEvents
     * @return \Illuminate\Database\Eloquent\Builder|Model
     */
    public static function create(int $idAppClient, array $selectedEvents)
    {
        foreach($selectedEvents as $selectedEvent)
        {
            return static::query()->create([
                'app_client_id'     => $idAppClient,
                'webhook_event_id'  => $selectedEvent
            ]);
        }
    }
}
