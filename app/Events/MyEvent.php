<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MyEvent extends Event
{
    use SerializesModels;


    private $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->message = $msg;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return $this->message;
    }
}
