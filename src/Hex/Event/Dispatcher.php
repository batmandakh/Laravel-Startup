<?php namespace Hex\Event;

use Illuminate\Events\Dispatcher as LaravelDispatcher;

class Dispatcher {
    /**
     * @var \Illuminate\Events\Dispatcher
     */
    private $dispatcher;

    /**
     * Event илгээх буюу явуулах функц
     * @param Array $events
     */
    public function dispatch(Array $events)
    {
        foreach($events as $event)
        {
            $this->dispatcher->fire($event->name(), [$event]);
        }
    }
}