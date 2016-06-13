<?php

class Lang extends \Illuminate\Support\Facades\Lang{

	/**
	 * Determine if a translation exists for a given locale.
	 *
	 * @param string $key
	 * @param string|null $locale
	 * @return bool 
	 * @static 
	 */
	public static function hasForLocale($key, $locale = null){
		return \Illuminate\Translation\Translator::hasForLocale($key, $locale);
	}

	/**
	 * Determine if a translation exists.
	 *
	 * @param string $key
	 * @param string|null $locale
	 * @param bool $fallback
	 * @return bool 
	 * @static 
	 */
	public static function has($key, $locale = null, $fallback = true){
		return \Illuminate\Translation\Translator::has($key, $locale, $fallback);
	}

	/**
	 * Get the translation for the given key.
	 *
	 * @param string $key
	 * @param array $replace
	 * @param string|null $locale
	 * @param bool $fallback
	 * @return string|array|null 
	 * @static 
	 */
	public static function get($key, $replace = array(), $locale = null, $fallback = true){
		return \Illuminate\Translation\Translator::get($key, $replace, $locale, $fallback);
	}

	/**
	 * Get a translation according to an integer value.
	 *
	 * @param string $key
	 * @param int|array|\Countable $number
	 * @param array $replace
	 * @param string $locale
	 * @return string 
	 * @static 
	 */
	public static function choice($key, $number, $replace = array(), $locale = null){
		return \Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
	}

	/**
	 * Get the translation for a given key.
	 *
	 * @param string $id
	 * @param array $parameters
	 * @param string $domain
	 * @param string $locale
	 * @return string|array|null 
	 * @static 
	 */
	public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null){
		return \Illuminate\Translation\Translator::trans($id, $parameters, $domain, $locale);
	}

	/**
	 * Get a translation according to an integer value.
	 *
	 * @param string $id
	 * @param int|array|\Countable $number
	 * @param array $parameters
	 * @param string $domain
	 * @param string $locale
	 * @return string 
	 * @static 
	 */
	public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null){
		return \Illuminate\Translation\Translator::transChoice($id, $number, $parameters, $domain, $locale);
	}

	/**
	 * Load the specified language group.
	 *
	 * @param string $namespace
	 * @param string $group
	 * @param string $locale
	 * @return void 
	 * @static 
	 */
	public static function load($namespace, $group, $locale){
		\Illuminate\Translation\Translator::load($namespace, $group, $locale);
	}

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string $namespace
	 * @param string $hint
	 * @return void 
	 * @static 
	 */
	public static function addNamespace($namespace, $hint){
		\Illuminate\Translation\Translator::addNamespace($namespace, $hint);
	}

	/**
	 * Parse a key into namespace, group, and item.
	 *
	 * @param string $key
	 * @return array 
	 * @static 
	 */
	public static function parseKey($key){
		return \Illuminate\Translation\Translator::parseKey($key);
	}

	/**
	 * Get the message selector instance.
	 *
	 * @return \Symfony\Component\Translation\MessageSelector 
	 * @static 
	 */
	public static function getSelector(){
		return \Illuminate\Translation\Translator::getSelector();
	}

	/**
	 * Set the message selector instance.
	 *
	 * @param \Symfony\Component\Translation\MessageSelector $selector
	 * @return void 
	 * @static 
	 */
	public static function setSelector($selector){
		\Illuminate\Translation\Translator::setSelector($selector);
	}

	/**
	 * Get the language line loader implementation.
	 *
	 * @return \Illuminate\Translation\LoaderInterface 
	 * @static 
	 */
	public static function getLoader(){
		return \Illuminate\Translation\Translator::getLoader();
	}

	/**
	 * Get the default locale being used.
	 *
	 * @return string 
	 * @static 
	 */
	public static function locale(){
		return \Illuminate\Translation\Translator::locale();
	}

	/**
	 * Get the default locale being used.
	 *
	 * @return string 
	 * @static 
	 */
	public static function getLocale(){
		return \Illuminate\Translation\Translator::getLocale();
	}

	/**
	 * Set the default locale.
	 *
	 * @param string $locale
	 * @return void 
	 * @static 
	 */
	public static function setLocale($locale){
		\Illuminate\Translation\Translator::setLocale($locale);
	}

	/**
	 * Get the fallback locale being used.
	 *
	 * @return string 
	 * @static 
	 */
	public static function getFallback(){
		return \Illuminate\Translation\Translator::getFallback();
	}

	/**
	 * Set the fallback locale being used.
	 *
	 * @param string $fallback
	 * @return void 
	 * @static 
	 */
	public static function setFallback($fallback){
		\Illuminate\Translation\Translator::setFallback($fallback);
	}

	/**
	 * Set the parsed value of a key.
	 *
	 * @param string $key
	 * @param array $parsed
	 * @return void 
	 * @static 
	 */
	public static function setParsedKey($key, $parsed){
		//Method inherited from \Illuminate\Support\NamespacedItemResolver            
		\Illuminate\Translation\Translator::setParsedKey($key, $parsed);
	}

}
