<?php

class Mail extends \Illuminate\Support\Facades\Mail
{

	/**
	 * Set the global from address and name.
	 *
	 * @param string $address
	 * @param string|null $name
	 * @return void 
	 * @static 
	 */
	public static function alwaysFrom($address, $name = null){
		\Illuminate\Mail\Mailer::alwaysFrom($address, $name);
	}

	/**
	 * Set the global to address and name.
	 *
	 * @param string $address
	 * @param string|null $name
	 * @return void 
	 * @static 
	 */
	public static function alwaysTo($address, $name = null){
		\Illuminate\Mail\Mailer::alwaysTo($address, $name);
	}

	/**
	 * Send a new message when only a raw text part.
	 *
	 * @param string $text
	 * @param mixed $callback
	 * @return void 
	 * @static 
	 */
	public static function raw($text, $callback){
		\Illuminate\Mail\Mailer::raw($text, $callback);
	}

	/**
	 * Send a new message when only a plain part.
	 *
	 * @param string $view
	 * @param array $data
	 * @param mixed $callback
	 * @return void 
	 * @static 
	 */
	public static function plain($view, $data, $callback){
		\Illuminate\Mail\Mailer::plain($view, $data, $callback);
	}

	/**
	 * Send a new message using a view.
	 *
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @return void 
	 * @static 
	 */
	public static function send($view, $data, $callback){
		\Illuminate\Mail\Mailer::send($view, $data, $callback);
	}

	/**
	 * Queue a new e-mail message for sending.
	 *
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @param string|null $queue
	 * @return mixed 
	 * @static 
	 */
	public static function queue($view, $data, $callback, $queue = null){
		return \Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
	}

	/**
	 * Queue a new e-mail message for sending on the given queue.
	 *
	 * @param string $queue
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @return mixed 
	 * @static 
	 */
	public static function onQueue($queue, $view, $data, $callback){
		return \Illuminate\Mail\Mailer::onQueue($queue, $view, $data, $callback);
	}

	/**
	 * Queue a new e-mail message for sending on the given queue.
	 * 
	 * This method didn't match rest of framework's "onQueue" phrasing. Added "onQueue".
	 *
	 * @param string $queue
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @return mixed 
	 * @static 
	 */
	public static function queueOn($queue, $view, $data, $callback){
		return \Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
	}

	/**
	 * Queue a new e-mail message for sending after (n) seconds.
	 *
	 * @param int $delay
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @param string|null $queue
	 * @return mixed 
	 * @static 
	 */
	public static function later($delay, $view, $data, $callback, $queue = null){
		return \Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
	}

	/**
	 * Queue a new e-mail message for sending after (n) seconds on the given queue.
	 *
	 * @param string $queue
	 * @param int $delay
	 * @param string|array $view
	 * @param array $data
	 * @param \Closure|string $callback
	 * @return mixed 
	 * @static 
	 */
	public static function laterOn($queue, $delay, $view, $data, $callback){
		return \Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
	}

	/**
	 * Handle a queued e-mail message job.
	 *
	 * @param \Illuminate\Contracts\Queue\Job $job
	 * @param array $data
	 * @return void 
	 * @static 
	 */
	public static function handleQueuedMessage($job, $data){
		\Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
	}

	/**
	 * Get the view factory instance.
	 *
	 * @return \Illuminate\Contracts\View\Factory 
	 * @static 
	 */
	public static function getViewFactory(){
		return \Illuminate\Mail\Mailer::getViewFactory();
	}

	/**
	 * Get the Swift Mailer instance.
	 *
	 * @return \Swift_Mailer 
	 * @static 
	 */
	public static function getSwiftMailer(){
		return \Illuminate\Mail\Mailer::getSwiftMailer();
	}

	/**
	 * Get the array of failed recipients.
	 *
	 * @return array 
	 * @static 
	 */
	public static function failures(){
		return \Illuminate\Mail\Mailer::failures();
	}

	/**
	 * Set the Swift Mailer instance.
	 *
	 * @param \Swift_Mailer $swift
	 * @return void 
	 * @static 
	 */
	public static function setSwiftMailer($swift){
		\Illuminate\Mail\Mailer::setSwiftMailer($swift);
	}

	/**
	 * Set the queue manager instance.
	 *
	 * @param \Illuminate\Contracts\Queue\Queue $queue
	 * @return $this 
	 * @static 
	 */
	public static function setQueue($queue){
		return \Illuminate\Mail\Mailer::setQueue($queue);
	}

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Contracts\Container\Container $container
	 * @return void 
	 * @static 
	 */
	public static function setContainer($container){
		\Illuminate\Mail\Mailer::setContainer($container);
	}

}
