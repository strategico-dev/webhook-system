<?php

namespace App\Models;

use App\Models\AppClient;
use Illuminate\Database\Eloquent\Model;

/**
 * @property $clients
 */
class WebhookEvent extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function clients()
    {
        return $this->belongsToMany(AppClient::class);
    }

    /**
     * @param string $name
     * @return mixed
     */
    public static function findByName(string $name)
    {
        return self::where('name', '=', $name)->first();
    }
}
