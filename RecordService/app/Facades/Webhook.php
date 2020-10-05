<?php

namespace App\Facades;

use GuzzleHttp\Client;
use App\Models\WebhookEvent;

class Webhook
{
    /**
     * @param WebhookEvent $webhookEvent
     * @param array $data
     */
    public static function notify(WebhookEvent $webhookEvent, array $data = [])
    {
        $httpClient = new Client();

        foreach($webhookEvent->clients as $client)
        {
            $httpClient->post($client->url_handler, [
                'form_params' => $data
            ]);
        }
    }
}
