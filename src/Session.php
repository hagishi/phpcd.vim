<?php

class Session extends \Illuminate\Support\Facades\Session
{

	/**
	 * Get the session configuration.
	 *
	 * @return array 
	 * @static 
	 */
	public static function getSessionConfig(){
		return \Illuminate\Session\SessionManager::getSessionConfig();
	}

	/**
	 * Get the default session driver name.
	 *
	 * @return string 
	 * @static 
	 */
	public static function getDefaultDriver(){
		return \Illuminate\Session\SessionManager::getDefaultDriver();
	}

	/**
	 * Set the default session driver name.
	 *
	 * @param string $name
	 * @return void 
	 * @static 
	 */
	public static function setDefaultDriver($name){
		\Illuminate\Session\SessionManager::setDefaultDriver($name);
	}

	/**
	 * Get a driver instance.
	 *
	 * @param string $driver
	 * @return mixed 
	 * @static 
	 */
	public static function driver($driver = null){
		//Method inherited from \Illuminate\Support\Manager            
		return \Illuminate\Session\SessionManager::driver($driver);
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
		//Method inherited from \Illuminate\Support\Manager            
		return \Illuminate\Session\SessionManager::extend($driver, $callback);
	}

	/**
	 * Get all of the created "drivers".
	 *
	 * @return array 
	 * @static 
	 */
	public static function getDrivers(){
		//Method inherited from \Illuminate\Support\Manager            
		return \Illuminate\Session\SessionManager::getDrivers();
	}

	/**
	 * Starts the session storage.
	 *
	 * @return bool True if session started.
	 * @throws \RuntimeException If session fails to start.
	 * @static 
	 */
	public static function start(){
		return \Illuminate\Session\Store::start();
	}

	/**
	 * Returns the session ID.
	 *
	 * @return string The session ID.
	 * @static 
	 */
	public static function getId(){
		return \Illuminate\Session\Store::getId();
	}

	/**
	 * Sets the session ID.
	 *
	 * @param string $id
	 * @static 
	 */
	public static function setId($id){
		return \Illuminate\Session\Store::setId($id);
	}

	/**
	 * Determine if this is a valid session ID.
	 *
	 * @param string $id
	 * @return bool 
	 * @static 
	 */
	public static function isValidId($id){
		return \Illuminate\Session\Store::isValidId($id);
	}

	/**
	 * Returns the session name.
	 *
	 * @return mixed The session name.
	 * @static 
	 */
	public static function getName(){
		return \Illuminate\Session\Store::getName();
	}

	/**
	 * Sets the session name.
	 *
	 * @param string $name
	 * @static 
	 */
	public static function setName($name){
		return \Illuminate\Session\Store::setName($name);
	}

	/**
	 * Invalidates the current session.
	 * 
	 * Clears all session attributes and flashes and regenerates the
	 * session and deletes the old session from persistence.
	 *
	 * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
	 *                      will leave the system settings unchanged, 0 sets the cookie
	 *                      to expire with browser session. Time is in seconds, and is
	 *                      not a Unix timestamp.
	 * @return bool True if session invalidated, false if error.
	 * @static 
	 */
	public static function invalidate($lifetime = null){
		return \Illuminate\Session\Store::invalidate($lifetime);
	}

	/**
	 * Migrates the current session to a new session id while maintaining all
	 * session attributes.
	 *
	 * @param bool $destroy Whether to delete the old session or leave it to garbage collection.
	 * @param int $lifetime Sets the cookie lifetime for the session cookie. A null value
	 *                       will leave the system settings unchanged, 0 sets the cookie
	 *                       to expire with browser session. Time is in seconds, and is
	 *                       not a Unix timestamp.
	 * @return bool True if session migrated, false if error.
	 * @static 
	 */
	public static function migrate($destroy = false, $lifetime = null){
		return \Illuminate\Session\Store::migrate($destroy, $lifetime);
	}

	/**
	 * Generate a new session identifier.
	 *
	 * @param bool $destroy
	 * @return bool 
	 * @static 
	 */
	public static function regenerate($destroy = false){
		return \Illuminate\Session\Store::regenerate($destroy);
	}

	/**
	 * Force the session to be saved and closed.
	 * 
	 * This method is generally not required for real sessions as
	 * the session will be automatically saved at the end of
	 * code execution.
	 *
	 * @static 
	 */
	public static function save(){
		return \Illuminate\Session\Store::save();
	}

	/**
	 * Age the flash data for the session.
	 *
	 * @return void 
	 * @static 
	 */
	public static function ageFlashData(){
		\Illuminate\Session\Store::ageFlashData();
	}

	/**
	 * Checks if an attribute is defined.
	 *
	 * @param string $name The attribute name
	 * @return bool true if the attribute is defined, false otherwise
	 * @static 
	 */
	public static function has($name){
		return \Illuminate\Session\Store::has($name);
	}

	/**
	 * Returns an attribute.
	 *
	 * @param string $name The attribute name
	 * @param mixed $default The default value if not found.
	 * @return mixed 
	 * @static 
	 */
	public static function get($name, $default = null){
		return \Illuminate\Session\Store::get($name, $default);
	}

	/**
	 * Get the value of a given key and then forget it.
	 *
	 * @param string $key
	 * @param string $default
	 * @return mixed 
	 * @static 
	 */
	public static function pull($key, $default = null){
		return \Illuminate\Session\Store::pull($key, $default);
	}

	/**
	 * Determine if the session contains old input.
	 *
	 * @param string $key
	 * @return bool 
	 * @static 
	 */
	public static function hasOldInput($key = null){
		return \Illuminate\Session\Store::hasOldInput($key);
	}

	/**
	 * Get the requested item from the flashed input array.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed 
	 * @static 
	 */
	public static function getOldInput($key = null, $default = null){
		return \Illuminate\Session\Store::getOldInput($key, $default);
	}

	/**
	 * Sets an attribute.
	 *
	 * @param string $name
	 * @param mixed $value
	 * @static 
	 */
	public static function set($name, $value){
		return \Illuminate\Session\Store::set($name, $value);
	}

	/**
	 * Put a key / value pair or array of key / value pairs in the session.
	 *
	 * @param string|array $key
	 * @param mixed $value
	 * @return void 
	 * @static 
	 */
	public static function put($key, $value = null){
		\Illuminate\Session\Store::put($key, $value);
	}

	/**
	 * Push a value onto a session array.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void 
	 * @static 
	 */
	public static function push($key, $value){
		\Illuminate\Session\Store::push($key, $value);
	}

	/**
	 * Flash a key / value pair to the session.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void 
	 * @static 
	 */
	public static function flash($key, $value){
		\Illuminate\Session\Store::flash($key, $value);
	}

	/**
	 * Flash a key / value pair to the session
	 * for immediate use.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void 
	 * @static 
	 */
	public static function now($key, $value){
		\Illuminate\Session\Store::now($key, $value);
	}

	/**
	 * Flash an input array to the session.
	 *
	 * @param array $value
	 * @return void 
	 * @static 
	 */
	public static function flashInput($value){
		\Illuminate\Session\Store::flashInput($value);
	}

	/**
	 * Reflash all of the session flash data.
	 *
	 * @return void 
	 * @static 
	 */
	public static function reflash(){
		\Illuminate\Session\Store::reflash();
	}

	/**
	 * Reflash a subset of the current flash data.
	 *
	 * @param array|mixed $keys
	 * @return void 
	 * @static 
	 */
	public static function keep($keys = null){
		\Illuminate\Session\Store::keep($keys);
	}

	/**
	 * Returns attributes.
	 *
	 * @return array Attributes
	 * @static 
	 */
	public static function all(){
		return \Illuminate\Session\Store::all();
	}

	/**
	 * Sets attributes.
	 *
	 * @param array $attributes Attributes
	 * @static 
	 */
	public static function replace($attributes){
		return \Illuminate\Session\Store::replace($attributes);
	}

	/**
	 * Removes an attribute.
	 *
	 * @param string $name
	 * @return mixed The removed value or null when it does not exist
	 * @static 
	 */
	public static function remove($name){
		return \Illuminate\Session\Store::remove($name);
	}

	/**
	 * Remove one or many items from the session.
	 *
	 * @param string|array $keys
	 * @return void 
	 * @static 
	 */
	public static function forget($keys){
		\Illuminate\Session\Store::forget($keys);
	}

	/**
	 * Clears all attributes.
	 *
	 * @static 
	 */
	public static function clear(){
		return \Illuminate\Session\Store::clear();
	}

	/**
	 * Remove all of the items from the session.
	 *
	 * @return void 
	 * @static 
	 */
	public static function flush(){
		\Illuminate\Session\Store::flush();
	}

	/**
	 * Checks if the session was started.
	 *
	 * @return bool 
	 * @static 
	 */
	public static function isStarted(){
		return \Illuminate\Session\Store::isStarted();
	}

	/**
	 * Registers a SessionBagInterface with the session.
	 *
	 * @param \Symfony\Component\HttpFoundation\Session\SessionBagInterface $bag
	 * @static 
	 */
	public static function registerBag($bag){
		return \Illuminate\Session\Store::registerBag($bag);
	}

	/**
	 * Gets a bag instance by name.
	 *
	 * @param string $name
	 * @return \Symfony\Component\HttpFoundation\Session\SessionBagInterface 
	 * @static 
	 */
	public static function getBag($name){
		return \Illuminate\Session\Store::getBag($name);
	}

	/**
	 * Gets session meta.
	 *
	 * @return \Symfony\Component\HttpFoundation\Session\MetadataBag 
	 * @static 
	 */
	public static function getMetadataBag(){
		return \Illuminate\Session\Store::getMetadataBag();
	}

	/**
	 * Get the raw bag data array for a given bag.
	 *
	 * @param string $name
	 * @return array 
	 * @static 
	 */
	public static function getBagData($name){
		return \Illuminate\Session\Store::getBagData($name);
	}

	/**
	 * Get the CSRF token value.
	 *
	 * @return string 
	 * @static 
	 */
	public static function token(){
		return \Illuminate\Session\Store::token();
	}

	/**
	 * Get the CSRF token value.
	 *
	 * @return string 
	 * @static 
	 */
	public static function getToken(){
		return \Illuminate\Session\Store::getToken();
	}

	/**
	 * Regenerate the CSRF token value.
	 *
	 * @return void 
	 * @static 
	 */
	public static function regenerateToken(){
		\Illuminate\Session\Store::regenerateToken();
	}

	/**
	 * Get the previous URL from the session.
	 *
	 * @return string|null 
	 * @static 
	 */
	public static function previousUrl(){
		return \Illuminate\Session\Store::previousUrl();
	}

	/**
	 * Set the "previous" URL in the session.
	 *
	 * @param string $url
	 * @return void 
	 * @static 
	 */
	public static function setPreviousUrl($url){
		\Illuminate\Session\Store::setPreviousUrl($url);
	}

	/**
	 * Set the existence of the session on the handler if applicable.
	 *
	 * @param bool $value
	 * @return void 
	 * @static 
	 */
	public static function setExists($value){
		\Illuminate\Session\Store::setExists($value);
	}

	/**
	 * Get the underlying session handler implementation.
	 *
	 * @return \SessionHandlerInterface 
	 * @static 
	 */
	public static function getHandler(){
		return \Illuminate\Session\Store::getHandler();
	}

	/**
	 * Determine if the session handler needs a request.
	 *
	 * @return bool 
	 * @static 
	 */
	public static function handlerNeedsRequest(){
		return \Illuminate\Session\Store::handlerNeedsRequest();
	}

	/**
	 * Set the request on the handler instance.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @return void 
	 * @static 
	 */
	public static function setRequestOnHandler($request){
		\Illuminate\Session\Store::setRequestOnHandler($request);
	}

}
