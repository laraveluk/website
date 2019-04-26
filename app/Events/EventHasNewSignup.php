<?php

namespace App\Events;

use App\Models\EventSignup;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;


class EventHasNewSignup
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $eventSignUp;

    /**
     * Create a new event instance.
     *
     * @param EventSignup $eventSignUp
     */
    public function __construct(EventSignup $eventSignUp)
    {
        $this->eventSignUp = $eventSignUp;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return [];
    }
}
