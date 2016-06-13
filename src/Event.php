<?php

class Event extends \Illuminate\Support\Facades\Event
{

    /**
     * Register an event listener with the dispatcher.
     *
     * @param string|array $events
     * @param mixed $listener
     * @param int $priority
     * @return void
     * @static
     */
    public static function listen($events, $listener, $priority = 0){
        \Illuminate\Events\Dispatcher::listen($events, $listener, $priority);
    }

    /**
     * Determine if a given event has listeners.
     *
     * @param string $eventName
     * @return bool
     * @static
     */
    public static function hasListeners($eventName){
        return \Illuminate\Events\Dispatcher::hasListeners($eventName);
    }

    /**
     * Register an event and payload to be fired later.
     *
     * @param string $event
     * @param array $payload
     * @return void
     * @static
     */
    public static function push($event, $payload = array()){
        \Illuminate\Events\Dispatcher::push($event, $payload);
    }

    /**
     * Register an event subscriber with the dispatcher.
     *
     * @param object|string $subscriber
     * @return void
     * @static
     */
    public static function subscribe($subscriber){
        \Illuminate\Events\Dispatcher::subscribe($subscriber);
    }

    /**
     * Fire an event until the first non-null response is returned.
     *
     * @param string|object $event
     * @param array $payload
     * @return mixed
     * @static
     */
    public static function until($event, $payload = array()){
        return \Illuminate\Events\Dispatcher::until($event, $payload);
    }

    /**
     * Flush a set of pushed events.
     *
     * @param string $event
     * @return void
     * @static
     */
    public static function flush($event){
        \Illuminate\Events\Dispatcher::flush($event);
    }

    /**
     * Get the event that is currently firing.
     *
     * @return string
     * @static
     */
    public static function firing(){
        return \Illuminate\Events\Dispatcher::firing();
    }

    /**
     * Fire an event and call the listeners.
     *
     * @param string|object $event
     * @param mixed $payload
     * @param bool $halt
     * @return array|null
     * @static
     */
    public static function fire($event, $payload = array(), $halt = false){
        return \Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
    }

    /**
     * Get all of the listeners for a given event name.
     *
     * @param string $eventName
     * @return array
     * @static
     */
    public static function getListeners($eventName){
        return \Illuminate\Events\Dispatcher::getListeners($eventName);
    }

    /**
     * Register an event listener with the dispatcher.
     *
     * @param mixed $listener
     * @return mixed
     * @static
     */
    public static function makeListener($listener){
        return \Illuminate\Events\Dispatcher::makeListener($listener);
    }

    /**
     * Create a class based listener using the IoC container.
     *
     * @param mixed $listener
     * @return \Closure
     * @static
     */
    public static function createClassListener($listener){
        return \Illuminate\Events\Dispatcher::createClassListener($listener);
    }

    /**
     * Remove a set of listeners from the dispatcher.
     *
     * @param string $event
     * @return void
     * @static
     */
    public static function forget($event){
        \Illuminate\Events\Dispatcher::forget($event);
    }

    /**
     * Forget all of the pushed listeners.
     *
     * @return void
     * @static
     */
    public static function forgetPushed(){
        \Illuminate\Events\Dispatcher::forgetPushed();
    }

    /**
     * Set the queue resolver implementation.
     *
     * @param callable $resolver
     * @return $this
     * @static
     */
    public static function setQueueResolver($resolver){
        return \Illuminate\Events\Dispatcher::setQueueResolver($resolver);
    }

}
