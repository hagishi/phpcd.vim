<?php

class Auth extends \Illuminate\Support\Facades\Auth
{

	/**
	 * Attempt to get the guard from the local cache.
	 *
	 * @param string $name
	 * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
	 * @static
	 */
	public static function guard($name = null){
		return \Illuminate\Auth\AuthManager::guard($name);
	}

	/**
	 * Create a session based authentication guard.
	 *
	 * @param string $name
	 * @param array $config
	 * @return \Illuminate\Auth\SessionGuard
	 * @static
	 */
	public static function createSessionDriver($name, $config){
		return \Illuminate\Auth\AuthManager::createSessionDriver($name, $config);
	}

	/**
	 * Create a token based authentication guard.
	 *
	 * @param string $name
	 * @param array $config
	 * @return \Illuminate\Auth\TokenGuard
	 * @static
	 */
	public static function createTokenDriver($name, $config){
		return \Illuminate\Auth\AuthManager::createTokenDriver($name, $config);
	}

	/**
	 * Get the default authentication driver name.
	 *
	 * @return string
	 * @static
	 */
	public static function getDefaultDriver(){
		return \Illuminate\Auth\AuthManager::getDefaultDriver();
	}

	/**
	 * Set the default guard driver the factory should serve.
	 *
	 * @param string $name
	 * @return void
	 * @static
	 */
	public static function shouldUse($name){
		\Illuminate\Auth\AuthManager::shouldUse($name);
	}

	/**
	 * Set the default authentication driver name.
	 *
	 * @param string $name
	 * @return void
	 * @static
	 */
	public static function setDefaultDriver($name){
		\Illuminate\Auth\AuthManager::setDefaultDriver($name);
	}

	/**
	 * Register a new callback based request guard.
	 *
	 * @param string $driver
	 * @param callable $callback
	 * @return $this
	 * @static
	 */
	public static function viaRequest($driver, $callback){
		return \Illuminate\Auth\AuthManager::viaRequest($driver, $callback);
	}

	/**
	 * Get the user resolver callback.
	 *
	 * @return \Closure
	 * @static
	 */
	public static function userResolver(){
		return \Illuminate\Auth\AuthManager::userResolver();
	}

	/**
	 * Set the callback to be used to resolve users.
	 *
	 * @param \Closure $userResolver
	 * @return $this
	 * @static
	 */
	public static function resolveUsersUsing($userResolver){
		return \Illuminate\Auth\AuthManager::resolveUsersUsing($userResolver);
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
		return \Illuminate\Auth\AuthManager::extend($driver, $callback);
	}

	/**
	 * Register a custom provider creator Closure.
	 *
	 * @param string $name
	 * @param \Closure $callback
	 * @return $this
	 * @static
	 */
	public static function provider($name, $callback){
		return \Illuminate\Auth\AuthManager::provider($name, $callback);
	}

	/**
	 * Create the user provider implementation for the driver.
	 *
	 * @param string $provider
	 * @return \Illuminate\Contracts\Auth\UserProvider
	 * @throws \InvalidArgumentException
	 * @static
	 */
	public static function createUserProvider($provider){
		return \Illuminate\Auth\AuthManager::createUserProvider($provider);
	}

}
