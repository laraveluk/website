<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class EventSignup extends Model
{
    use SoftDeletes, Notifiable;
    
    /** @var array $fillable */
    protected $fillable = ['email', 'year'];

    public function routeNotificationForEmail()
    {
        return $this->email;
    }

    public function routeNotificationForSlack()
    {
        return config('services.slack.event_signup_webhook');
    }
}
