<?php

class URL extends \Illuminate\Support\Facades\URL
{

	/**
	 * Get the full URL for the current request.
	 *
	 * @return string 
	 * @static 
	 */
	public static function full(){
		return \Illuminate\Routing\UrlGenerator::full();
	}

	/**
	 * Get the current URL for the request.
	 *
	 * @return string 
	 * @static 
	 */
	public static function current(){
		return \Illuminate\Routing\UrlGenerator::current();
	}

	/**
	 * Get the URL for the previous request.
	 *
	 * @return string 
	 * @static 
	 */
	public static function previous(){
		return \Illuminate\Routing\UrlGenerator::previous();
	}

	/**
	 * Generate an absolute URL to the given path.
	 *
	 * @param string $path
	 * @param mixed $extra
	 * @param bool|null $secure
	 * @return string 
	 * @static 
	 */
	public static function to($path, $extra = array(), $secure = null){
		return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
	}

	/**
	 * Generate a secure, absolute URL to the given path.
	 *
	 * @param string $path
	 * @param array $parameters
	 * @return string 
	 * @static 
	 */
	public static function secure($path, $parameters = array()){
		return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
	}

	/**
	 * Generate a URL to an application asset.
	 *
	 * @param string $path
	 * @param bool|null $secure
	 * @return string 
	 * @static 
	 */
	public static function asset($path, $secure = null){
		return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
	}

	/**
	 * Generate a URL to an asset from a custom root domain such as CDN, etc.
	 *
	 * @param string $root
	 * @param string $path
	 * @param bool|null $secure
	 * @return string 
	 * @static 
	 */
	public static function assetFrom($root, $path, $secure = null){
		return \Illuminate\Routing\UrlGenerator::assetFrom($root, $path, $secure);
	}

	/**
	 * Generate a URL to a secure asset.
	 *
	 * @param string $path
	 * @return string 
	 * @static 
	 */
	public static function secureAsset($path){
		return \Illuminate\Routing\UrlGenerator::secureAsset($path);
	}

	/**
	 * Force the schema for URLs.
	 *
	 * @param string $schema
	 * @return void 
	 * @static 
	 */
	public static function forceSchema($schema){
		\Illuminate\Routing\UrlGenerator::forceSchema($schema);
	}

	/**
	 * Get the URL to a named route.
	 *
	 * @param string $name
	 * @param mixed $parameters
	 * @param bool $absolute
	 * @return string 
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	public static function route($name, $parameters = array(), $absolute = true){
		return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
	}

	/**
	 * Get the URL to a controller action.
	 *
	 * @param string $action
	 * @param mixed $parameters
	 * @param bool $absolute
	 * @return string 
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	public static function action($action, $parameters = array(), $absolute = true){
		return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
	}

	/**
	 * Set the forced root URL.
	 *
	 * @param string $root
	 * @return void 
	 * @static 
	 */
	public static function forceRootUrl($root){
		\Illuminate\Routing\UrlGenerator::forceRootUrl($root);
	}

	/**
	 * Determine if the given path is a valid URL.
	 *
	 * @param string $path
	 * @return bool 
	 * @static 
	 */
	public static function isValidUrl($path){
		return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
	}

	/**
	 * Get the request instance.
	 *
	 * @return \Illuminate\Http\Request 
	 * @static 
	 */
	public static function getRequest(){
		return \Illuminate\Routing\UrlGenerator::getRequest();
	}

	/**
	 * Set the current request instance.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return void 
	 * @static 
	 */
	public static function setRequest($request){
		\Illuminate\Routing\UrlGenerator::setRequest($request);
	}

	/**
	 * Set the route collection.
	 *
	 * @param \Illuminate\Routing\RouteCollection $routes
	 * @return $this 
	 * @static 
	 */
	public static function setRoutes($routes){
		return \Illuminate\Routing\UrlGenerator::setRoutes($routes);
	}

	/**
	 * Set the session resolver for the generator.
	 *
	 * @param callable $sessionResolver
	 * @return $this 
	 * @static 
	 */
	public static function setSessionResolver($sessionResolver){
		return \Illuminate\Routing\UrlGenerator::setSessionResolver($sessionResolver);
	}

	/**
	 * Set the root controller namespace.
	 *
	 * @param string $rootNamespace
	 * @return $this 
	 * @static 
	 */
	public static function setRootControllerNamespace($rootNamespace){
		return \Illuminate\Routing\UrlGenerator::setRootControllerNamespace($rootNamespace);
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
		\Illuminate\Routing\UrlGenerator::macro($name, $macro);
	}

	/**
	 * Checks if macro is registered.
	 *
	 * @param string $name
	 * @return bool 
	 * @static 
	 */
	public static function hasMacro($name){
		return \Illuminate\Routing\UrlGenerator::hasMacro($name);
	}

}
