<?php

class Cache extends \Illuminate\Support\Facades\Cache 
{

	/**
	 * Get a cache store instance by name.
	 *
	 * @param string|null $name
	 * @return mixed
	 * @static
	 */
	public static function store($name = null){
		return \Illuminate\Cache\CacheManager::store($name);
	}

	/**
	 * Get a cache driver instance.
	 *
	 * @param string $driver
	 * @return mixed
	 * @static
	 */
	public static function driver($driver = null){
		return \Illuminate\Cache\CacheManager::driver($driver);
	}

	/**
	 * Create a new cache repository with the given implementation.
	 *
	 * @param \Illuminate\Contracts\Cache\Store $store
	 * @return \Illuminate\Cache\Repository
	 * @static
	 */
	public static function repository($store){
		return \Illuminate\Cache\CacheManager::repository($store);
	}

	/**
	 * Get the default cache driver name.
	 *
	 * @return string
	 * @static
	 */
	public static function getDefaultDriver(){
		return \Illuminate\Cache\CacheManager::getDefaultDriver();
	}

	/**
	 * Set the default cache driver name.
	 *
	 * @param string $name
	 * @return void
	 * @static
	 */
	public static function setDefaultDriver($name){
		\Illuminate\Cache\CacheManager::setDefaultDriver($name);
	}

	/**
	 * Register a custom driver creator Closure.
	 *
	 * @param string $driver
	 * @param \Closure $callback
	 * @return $this
	 * @static
	 */
	public static function extend($driver, $callback){
		return \Illuminate\Cache\CacheManager::extend($driver, $callback);
	}

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Contracts\Events\Dispatcher $events
	 * @return void
	 * @static
	 */
	public static function setEventDispatcher($events){
		\Illuminate\Cache\Repository::setEventDispatcher($events);
	}

	/**
	 * Determine if an item exists in the cache.
	 *
	 * @param string $key
	 * @return bool
	 * @static
	 */
	public static function has($key){
		return \Illuminate\Cache\Repository::has($key);
	}

	/**
	 * Retrieve an item from the cache by key.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed
	 * @static
	 */
	public static function get($key, $default = null){
		return \Illuminate\Cache\Repository::get($key, $default);
	}

	/**
	 * Retrieve multiple items from the cache by key.
	 *
	 * Items not found in the cache will have a null value.
	 *
	 * @param array $keys
	 * @return array
	 * @static
	 */
	public static function many($keys){
		return \Illuminate\Cache\Repository::many($keys);
	}

	/**
	 * Retrieve an item from the cache and delete it.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed
	 * @static
	 */
	public static function pull($key, $default = null){
		return \Illuminate\Cache\Repository::pull($key, $default);
	}

	/**
	 * Store an item in the cache.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @param \DateTime|int $minutes
	 * @return void
	 * @static
	 */
	public static function put($key, $value, $minutes = null){
		\Illuminate\Cache\Repository::put($key, $value, $minutes);
	}

	/**
	 * Store multiple items in the cache for a given number of minutes.
	 *
	 * @param array $values
	 * @param int $minutes
	 * @return void
	 * @static
	 */
	public static function putMany($values, $minutes){
		\Illuminate\Cache\Repository::putMany($values, $minutes);
	}

	/**
	 * Store an item in the cache if the key does not exist.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @param \DateTime|int $minutes
	 * @return bool
	 * @static
	 */
	public static function add($key, $value, $minutes){
		return \Illuminate\Cache\Repository::add($key, $value, $minutes);
	}

	/**
	 * Store an item in the cache indefinitely.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 * @static
	 */
	public static function forever($key, $value){
		\Illuminate\Cache\Repository::forever($key, $value);
	}

	/**
	 * Get an item from the cache, or store the default value.
	 *
	 * @param string $key
	 * @param \DateTime|int $minutes
	 * @param \Closure $callback
	 * @return mixed
	 * @static
	 */
	public static function remember($key, $minutes, $callback){
		return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
	}

	/**
	 * Get an item from the cache, or store the default value forever.
	 *
	 * @param string $key
	 * @param \Closure $callback
	 * @return mixed
	 * @static
	 */
	public static function sear($key, $callback){
		return \Illuminate\Cache\Repository::sear($key, $callback);
	}

	/**
	 * Get an item from the cache, or store the default value forever.
	 *
	 * @param string $key
	 * @param \Closure $callback
	 * @return mixed
	 * @static
	 */
	public static function rememberForever($key, $callback){
		return \Illuminate\Cache\Repository::rememberForever($key, $callback);
	}

	/**
	 * Remove an item from the cache.
	 *
	 * @param string $key
	 * @return bool
	 * @static
	 */
	public static function forget($key){
		return \Illuminate\Cache\Repository::forget($key);
	}

	/**
	 * Begin executing a new tags operation if the store supports it.
	 *
	 * @param array|mixed $names
	 * @return \Illuminate\Cache\TaggedCache
	 * @throws \BadMethodCallException
	 * @static
	 */
	public static function tags($names){
		return \Illuminate\Cache\Repository::tags($names);
	}

	/**
	 * Get the default cache time.
	 *
	 * @return int
	 * @static
	 */
	public static function getDefaultCacheTime(){
		return \Illuminate\Cache\Repository::getDefaultCacheTime();
	}

	/**
	 * Set the default cache time in minutes.
	 *
	 * @param int $minutes
	 * @return void
	 * @static
	 */
	public static function setDefaultCacheTime($minutes){
		\Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
	}

	/**
	 * Get the cache store implementation.
	 *
	 * @return \Illuminate\Contracts\Cache\Store
	 * @static
	 */
	public static function getStore(){
		return \Illuminate\Cache\Repository::getStore();
	}

	/**
	 * Determine if a cached value exists.
	 *
	 * @param string $key
	 * @return bool
	 * @static
	 */
	public static function offsetExists($key){
		return \Illuminate\Cache\Repository::offsetExists($key);
	}

	/**
	 * Retrieve an item from the cache by key.
	 *
	 * @param string $key
	 * @return mixed
	 * @static
	 */
	public static function offsetGet($key){
		return \Illuminate\Cache\Repository::offsetGet($key);
	}

	/**
	 * Store an item in the cache for the default time.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void
	 * @static
	 */
	public static function offsetSet($key, $value){
		\Illuminate\Cache\Repository::offsetSet($key, $value);
	}

	/**
	 * Remove an item from the cache.
	 *
	 * @param string $key
	 * @return void
	 * @static
	 */
	public static function offsetUnset($key){
		\Illuminate\Cache\Repository::offsetUnset($key);
	}

	/**
	 * Register a custom macro.
	 *
	 * @param string $name
	 * @param callable $macro
	 * @return void
	 * @static
	 */
	public static function macro($name, $macro){
		\Illuminate\Cache\Repository::macro($name, $macro);
	}

	/**
	 * Checks if macro is registered.
	 *
	 * @param string $name
	 * @return bool
	 * @static
	 */
	public static function hasMacro($name){
		return \Illuminate\Cache\Repository::hasMacro($name);
	}

	/**
	 * Dynamically handle calls to the class.
	 *
	 * @param string $method
	 * @param array $parameters
	 * @return mixed
	 * @throws \BadMethodCallException
	 * @static
	 */
	public static function macroCall($method, $parameters){
		return \Illuminate\Cache\Repository::macroCall($method, $parameters);
	}

	/**
	 * Increment the value of an item in the cache.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return int
	 * @static
	 */
	public static function increment($key, $value = 1){
		return \Illuminate\Cache\FileStore::increment($key, $value);
	}

	/**
	 * Decrement the value of an item in the cache.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return int
	 * @static
	 */
	public static function decrement($key, $value = 1){
		return \Illuminate\Cache\FileStore::decrement($key, $value);
	}

	/**
	 * Remove all items from the cache.
	 *
	 * @return void
	 * @static
	 */
	public static function flush(){
		\Illuminate\Cache\FileStore::flush();
	}

	/**
	 * Get the Filesystem instance.
	 *
	 * @return \Illuminate\Filesystem\Filesystem
	 * @static
	 */
	public static function getFilesystem(){
		return \Illuminate\Cache\FileStore::getFilesystem();
	}

	/**
	 * Get the working directory of the cache.
	 *
	 * @return string
	 * @static
	 */
	public static function getDirectory(){
		return \Illuminate\Cache\FileStore::getDirectory();
	}

	/**
	 * Get the cache key prefix.
	 *
	 * @return string
	 * @static
	 */
	public static function getPrefix(){
		return \Illuminate\Cache\FileStore::getPrefix();
	}

}
