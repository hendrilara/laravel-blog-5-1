<?php

namespace App\Handlers\Events;
use App\Events\MyEvent;
use App\Events\;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
class MyEventHendler
{
    /**
     * Create the event handler.
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
     * @param  Events  $event
     * @return void
     */
    public function handle(MyEvent $event)
    {
        Log::debug('MyEventHandler::hendle');
        log::debug($event->broadcastOn());
    }
}
