<?php

namespace App\Listeners;

use App\Events\EventHasNewSignup;
use App\Notifications\NotifyNewUserSignup;


class NotifyWhenEventUserSignedUp
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EventHasNewSignup  $event
     *
     * @return void
     */
    public function handle(EventHasNewSignup $event)
    {
        $event->eventSignUp->notify( new NotifyNewUserSignup($event->eventSignUp));
    }
}
