<?php
class Queue extends \Illuminate\Support\Facades\Queue
{

	/**
	 * Register an event listener for the after job event.
	 *
	 * @param mixed $callback
	 * @return void 
	 * @static 
	 */
	public static function after($callback){
		\Illuminate\Queue\QueueManager::after($callback);
	}

	/**
	 * Register an event listener for the daemon queue loop.
	 *
	 * @param mixed $callback
	 * @return void 
	 * @static 
	 */
	public static function looping($callback){
		\Illuminate\Queue\QueueManager::looping($callback);
	}

	/**
	 * Register an event listener for the failed job event.
	 *
	 * @param mixed $callback
	 * @return void 
	 * @static 
	 */
	public static function failing($callback){
		\Illuminate\Queue\QueueManager::failing($callback);
	}

	/**
	 * Register an event listener for the daemon queue stopping.
	 *
	 * @param mixed $callback
	 * @return void 
	 * @static 
	 */
	public static function stopping($callback){
		\Illuminate\Queue\QueueManager::stopping($callback);
	}

	/**
	 * Determine if the driver is connected.
	 *
	 * @param string $name
	 * @return bool 
	 * @static 
	 */
	public static function connected($name = null){
		return \Illuminate\Queue\QueueManager::connected($name);
	}

	/**
	 * Resolve a queue connection instance.
	 *
	 * @param string $name
	 * @return \Illuminate\Contracts\Queue\Queue 
	 * @static 
	 */
	public static function connection($name = null){
		return \Illuminate\Queue\QueueManager::connection($name);
	}

	/**
	 * Add a queue connection resolver.
	 *
	 * @param string $driver
	 * @param \Closure $resolver
	 * @return void 
	 * @static 
	 */
	public static function extend($driver, $resolver){
		\Illuminate\Queue\QueueManager::extend($driver, $resolver);
	}

	/**
	 * Add a queue connection resolver.
	 *
	 * @param string $driver
	 * @param \Closure $resolver
	 * @return void 
	 * @static 
	 */
	public static function addConnector($driver, $resolver){
		\Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
	}

	/**
	 * Get the name of the default queue connection.
	 *
	 * @return string 
	 * @static 
	 */
	public static function getDefaultDriver(){
		return \Illuminate\Queue\QueueManager::getDefaultDriver();
	}

	/**
	 * Set the name of the default queue connection.
	 *
	 * @param string $name
	 * @return void 
	 * @static 
	 */
	public static function setDefaultDriver($name){
		\Illuminate\Queue\QueueManager::setDefaultDriver($name);
	}

	/**
	 * Get the full name for the given connection.
	 *
	 * @param string $connection
	 * @return string 
	 * @static 
	 */
	public static function getName($connection = null){
		return \Illuminate\Queue\QueueManager::getName($connection);
	}

	/**
	 * Determine if the application is in maintenance mode.
	 *
	 * @return bool 
	 * @static 
	 */
	public static function isDownForMaintenance(){
		return \Illuminate\Queue\QueueManager::isDownForMaintenance();
	}

	/**
	 * Push a new job onto the queue.
	 *
	 * @param string $job
	 * @param mixed $data
	 * @param string $queue
	 * @return mixed 
	 * @throws \Exception|\Throwable
	 * @static 
	 */
	public static function push($job, $data = '', $queue = null){
		return \Illuminate\Queue\SyncQueue::push($job, $data, $queue);
	}

	/**
	 * Push a raw payload onto the queue.
	 *
	 * @param string $payload
	 * @param string $queue
	 * @param array $options
	 * @return mixed 
	 * @static 
	 */
	public static function pushRaw($payload, $queue = null, $options = array()){
		return \Illuminate\Queue\SyncQueue::pushRaw($payload, $queue, $options);
	}

	/**
	 * Push a new job onto the queue after a delay.
	 *
	 * @param \DateTime|int $delay
	 * @param string $job
	 * @param mixed $data
	 * @param string $queue
	 * @return mixed 
	 * @static 
	 */
	public static function later($delay, $job, $data = '', $queue = null){
		return \Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
	}

	/**
	 * Pop the next job off of the queue.
	 *
	 * @param string $queue
	 * @return \Illuminate\Contracts\Queue\Job|null 
	 * @static 
	 */
	public static function pop($queue = null){
		return \Illuminate\Queue\SyncQueue::pop($queue);
	}

	/**
	 * Push a new job onto the queue.
	 *
	 * @param string $queue
	 * @param string $job
	 * @param mixed $data
	 * @return mixed 
	 * @static 
	 */
	public static function pushOn($queue, $job, $data = ''){
		//Method inherited from \Illuminate\Queue\Queue            
		return \Illuminate\Queue\SyncQueue::pushOn($queue, $job, $data);
	}

	/**
	 * Push a new job onto the queue after a delay.
	 *
	 * @param string $queue
	 * @param \DateTime|int $delay
	 * @param string $job
	 * @param mixed $data
	 * @return mixed 
	 * @static 
	 */
	public static function laterOn($queue, $delay, $job, $data = ''){
		//Method inherited from \Illuminate\Queue\Queue            
		return \Illuminate\Queue\SyncQueue::laterOn($queue, $delay, $job, $data);
	}

	/**
	 * Push an array of jobs onto the queue.
	 *
	 * @param array $jobs
	 * @param mixed $data
	 * @param string $queue
	 * @return mixed 
	 * @static 
	 */
	public static function bulk($jobs, $data = '', $queue = null){
		//Method inherited from \Illuminate\Queue\Queue            
		return \Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
	}

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Container\Container $container
	 * @return void 
	 * @static 
	 */
	public static function setContainer($container){
		//Method inherited from \Illuminate\Queue\Queue            
		\Illuminate\Queue\SyncQueue::setContainer($container);
	}

	/**
	 * Set the encrypter instance.
	 *
	 * @param \Illuminate\Contracts\Encryption\Encrypter $crypt
	 * @return void 
	 * @static 
	 */
	public static function setEncrypter($crypt){
		//Method inherited from \Illuminate\Queue\Queue            
		\Illuminate\Queue\SyncQueue::setEncrypter($crypt);
	}

}
