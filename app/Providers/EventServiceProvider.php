<?php

namespace App\Providers;

use App\Events\EventHasNewSignup;
use App\Listeners\NotifyWhenEventUserSignedUp;
use App\Notifications\NotifyNewUserSignup;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use SocialiteProviders\Manager\SocialiteWasCalled;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        SocialiteWasCalled::class => [
            'SocialiteProviders\Slack\SlackExtendSocialite@handle',
        ],
        EventHasNewSignup::class => [
            NotifyWhenEventUserSignedUp::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
