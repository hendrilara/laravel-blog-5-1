<?php

namespace App\Providers;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
       //'App\Events\SomeEvent' => [
       //     'App\Listeners\EventListener',
        'event.name' => ['EventListener'],
        'App\Events\MyEvent' => ['App\Handlers\Events\MyEventHandler'],
       // ],
      //  'auth.login' => [
       // 'App\Handlers\Events\AuthLoginEventHandler',
        ],

    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        Event::listen('App\Events\MessageList', function($event){
            Log::debug('message');
            Log::debug($event->broadcastOn());
        });
    }
}
