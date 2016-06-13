<?php

class Cookie extends \Illuminate\Support\Facades\Cookie
{

	/**
	 * Create a new cookie instance.
	 *
	 * @param string $name
	 * @param string $value
	 * @param int $minutes
	 * @param string $path
	 * @param string $domain
	 * @param bool $secure
	 * @param bool $httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie 
	 * @static 
	 */
	public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
		return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
	}

	/**
	 * Create a cookie that lasts "forever" (five years).
	 *
	 * @param string $name
	 * @param string $value
	 * @param string $path
	 * @param string $domain
	 * @param bool $secure
	 * @param bool $httpOnly
	 * @return \Symfony\Component\HttpFoundation\Cookie 
	 * @static 
	 */
	public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
		return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
	}

	/**
	 * Expire the given cookie.
	 *
	 * @param string $name
	 * @param string $path
	 * @param string $domain
	 * @return \Symfony\Component\HttpFoundation\Cookie 
	 * @static 
	 */
	public static function forget($name, $path = null, $domain = null){
		return \Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
	}

	/**
	 * Determine if a cookie has been queued.
	 *
	 * @param string $key
	 * @return bool 
	 * @static 
	 */
	public static function hasQueued($key){
		return \Illuminate\Cookie\CookieJar::hasQueued($key);
	}

	/**
	 * Get a queued cookie instance.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return \Symfony\Component\HttpFoundation\Cookie 
	 * @static 
	 */
	public static function queued($key, $default = null){
		return \Illuminate\Cookie\CookieJar::queued($key, $default);
	}

	/**
	 * Queue a cookie to send with the next response.
	 *
	 * @param mixed
	 * @return void 
	 * @static 
	 */
	public static function queue(){
		\Illuminate\Cookie\CookieJar::queue();
	}

	/**
	 * Remove a cookie from the queue.
	 *
	 * @param string $name
	 * @return void 
	 * @static 
	 */
	public static function unqueue($name){
		\Illuminate\Cookie\CookieJar::unqueue($name);
	}

	/**
	 * Set the default path and domain for the jar.
	 *
	 * @param string $path
	 * @param string $domain
	 * @param bool $secure
	 * @return $this 
	 * @static 
	 */
	public static function setDefaultPathAndDomain($path, $domain, $secure = false){
		return \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain, $secure);
	}

	/**
	 * Get the cookies which have been queued for the next request.
	 *
	 * @return array 
	 * @static 
	 */
	public static function getQueuedCookies(){
		return \Illuminate\Cookie\CookieJar::getQueuedCookies();
	}

}
