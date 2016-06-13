<?php

class Config extends \Illuminate\Support\Facades\Config
{

	/**
	 * Determine if the given configuration value exists.
	 *
	 * @param string $key
	 * @return bool 
	 * @static 
	 */
	public static function has($key){
		return \Illuminate\Config\Repository::has($key);
	}

	/**
	 * Get the specified configuration value.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed 
	 * @static 
	 */
	public static function get($key, $default = null){
		return \Illuminate\Config\Repository::get($key, $default);
	}

	/**
	 * Set a given configuration value.
	 *
	 * @param array|string $key
	 * @param mixed $value
	 * @return void 
	 * @static 
	 */
	public static function set($key, $value = null){
		\Illuminate\Config\Repository::set($key, $value);
	}

	/**
	 * Prepend a value onto an array configuration value.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void 
	 * @static 
	 */
	public static function prepend($key, $value){
		\Illuminate\Config\Repository::prepend($key, $value);
	}

	/**
	 * Push a value onto an array configuration value.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void 
	 * @static 
	 */
	public static function push($key, $value){
		\Illuminate\Config\Repository::push($key, $value);
	}

	/**
	 * Get all of the configuration items for the application.
	 *
	 * @return array 
	 * @static 
	 */
	public static function all(){
		return \Illuminate\Config\Repository::all();
	}

	/**
	 * Determine if the given configuration option exists.
	 *
	 * @param string $key
	 * @return bool 
	 * @static 
	 */
	public static function offsetExists($key){
		return \Illuminate\Config\Repository::offsetExists($key);
	}

	/**
	 * Get a configuration option.
	 *
	 * @param string $key
	 * @return mixed 
	 * @static 
	 */
	public static function offsetGet($key){
		return \Illuminate\Config\Repository::offsetGet($key);
	}

	/**
	 * Set a configuration option.
	 *
	 * @param string $key
	 * @param mixed $value
	 * @return void 
	 * @static 
	 */
	public static function offsetSet($key, $value){
		\Illuminate\Config\Repository::offsetSet($key, $value);
	}

	/**
	 * Unset a configuration option.
	 *
	 * @param string $key
	 * @return void 
	 * @static 
	 */
	public static function offsetUnset($key){
		\Illuminate\Config\Repository::offsetUnset($key);
	}

}
