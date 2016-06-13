<?php

class Response extends \Illuminate\Support\Facades\Response{

	/**
	 * Return a new response from the application.
	 *
	 * @param string $content
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\Response 
	 * @static 
	 */
	public static function make($content = '', $status = 200, $headers = array()){
		return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
	}

	/**
	 * Return a new view response from the application.
	 *
	 * @param string $view
	 * @param array $data
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\Response 
	 * @static 
	 */
	public static function view($view, $data = array(), $status = 200, $headers = array()){
		return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
	}

	/**
	 * Return a new JSON response from the application.
	 *
	 * @param string|array $data
	 * @param int $status
	 * @param array $headers
	 * @param int $options
	 * @return \Illuminate\Http\JsonResponse 
	 * @static 
	 */
	public static function json($data = array(), $status = 200, $headers = array(), $options = 0){
		return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
	}

	/**
	 * Return a new JSONP response from the application.
	 *
	 * @param string $callback
	 * @param string|array $data
	 * @param int $status
	 * @param array $headers
	 * @param int $options
	 * @return \Illuminate\Http\JsonResponse 
	 * @static 
	 */
	public static function jsonp($callback, $data = array(), $status = 200, $headers = array(), $options = 0){
		return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
	}

	/**
	 * Return a new streamed response from the application.
	 *
	 * @param \Closure $callback
	 * @param int $status
	 * @param array $headers
	 * @return \Symfony\Component\HttpFoundation\StreamedResponse 
	 * @static 
	 */
	public static function stream($callback, $status = 200, $headers = array()){
		return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
	}

	/**
	 * Create a new file download response.
	 *
	 * @param \SplFileInfo|string $file
	 * @param string $name
	 * @param array $headers
	 * @param string|null $disposition
	 * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
	 * @static 
	 */
	public static function download($file, $name = null, $headers = array(), $disposition = 'attachment'){
		return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
	}

	/**
	 * Create a new redirect response to the given path.
	 *
	 * @param string $path
	 * @param int $status
	 * @param array $headers
	 * @param bool|null $secure
	 * @return \Illuminate\Http\RedirectResponse 
	 * @static 
	 */
	public static function redirectTo($path, $status = 302, $headers = array(), $secure = null){
		return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
	}

	/**
	 * Create a new redirect response to a named route.
	 *
	 * @param string $route
	 * @param array $parameters
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\RedirectResponse 
	 * @static 
	 */
	public static function redirectToRoute($route, $parameters = array(), $status = 302, $headers = array()){
		return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
	}

	/**
	 * Create a new redirect response to a controller action.
	 *
	 * @param string $action
	 * @param array $parameters
	 * @param int $status
	 * @param array $headers
	 * @return \Illuminate\Http\RedirectResponse 
	 * @static 
	 */
	public static function redirectToAction($action, $parameters = array(), $status = 302, $headers = array()){
		return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
	}

	/**
	 * Create a new redirect response, while putting the current URL in the session.
	 *
	 * @param string $path
	 * @param int $status
	 * @param array $headers
	 * @param bool|null $secure
	 * @return \Illuminate\Http\RedirectResponse 
	 * @static 
	 */
	public static function redirectGuest($path, $status = 302, $headers = array(), $secure = null){
		return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
	}

	/**
	 * Create a new redirect response to the previously intended location.
	 *
	 * @param string $default
	 * @param int $status
	 * @param array $headers
	 * @param bool|null $secure
	 * @return \Illuminate\Http\RedirectResponse 
	 * @static 
	 */
	public static function redirectToIntended($default = '/', $status = 302, $headers = array(), $secure = null){
		return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
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
		\Illuminate\Routing\ResponseFactory::macro($name, $macro);
	}

	/**
	 * Checks if macro is registered.
	 *
	 * @param string $name
	 * @return bool 
	 * @static 
	 */
	public static function hasMacro($name){
		return \Illuminate\Routing\ResponseFactory::hasMacro($name);
	}

}
