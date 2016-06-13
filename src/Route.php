<?php
class Route extends \Illuminate\Support\Facades\Route
{

	/**
	 * Register a new GET route with the router.
	 *
	 * @param string $uri
	 * @param \Closure|array|string|null $action
	 * @return \Illuminate\Routing\Route 
	 * @static 
	 */
	public static function get($uri, $action = null){
		return \Illuminate\Routing\Router::get($uri, $action);
	}

	/**
	 * Register a new POST route with the router.
	 *
	 * @param string $uri
	 * @param \Closure|array|string|null $action
	 * @return \Illuminate\Routing\Route 
	 * @static 
	 */
	public static function post($uri, $action = null){
		return \Illuminate\Routing\Router::post($uri, $action);
	}

	/**
	 * Register a new PUT route with the router.
	 *
	 * @param string $uri
	 * @param \Closure|array|string|null $action
	 * @return \Illuminate\Routing\Route 
	 * @static 
	 */
	public static function put($uri, $action = null){
		return \Illuminate\Routing\Router::put($uri, $action);
	}

	/**
	 * Register a new PATCH route with the router.
	 *
	 * @param string $uri
	 * @param \Closure|array|string|null $action
	 * @return \Illuminate\Routing\Route 
	 * @static 
	 */
	public static function patch($uri, $action = null){
		return \Illuminate\Routing\Router::patch($uri, $action);
	}

	/**
	 * Register a new DELETE route with the router.
	 *
	 * @param string $uri
	 * @param \Closure|array|string|null $action
	 * @return \Illuminate\Routing\Route 
	 * @static 
	 */
	public static function delete($uri, $action = null){
		return \Illuminate\Routing\Router::delete($uri, $action);
	}

	/**
	 * Register a new OPTIONS route with the router.
	 *
	 * @param string $uri
	 * @param \Closure|array|string|null $action
	 * @return \Illuminate\Routing\Route 
	 * @static 
	 */
	public static function options($uri, $action = null){
		return \Illuminate\Routing\Router::options($uri, $action);
	}

	/**
	 * Register a new route responding to all verbs.
	 *
	 * @param string $uri
	 * @param \Closure|array|string|null $action
	 * @return \Illuminate\Routing\Route 
	 * @static 
	 */
	public static function any($uri, $action = null){
		return \Illuminate\Routing\Router::any($uri, $action);
	}

	/**
	 * Register a new route with the given verbs.
	 *
	 * @param array|string $methods
	 * @param string $uri
	 * @param \Closure|array|string|null $action
	 * @return \Illuminate\Routing\Route 
	 * @static 
	 */
	public static function match($methods, $uri, $action = null){
		return \Illuminate\Routing\Router::match($methods, $uri, $action);
	}

	/**
	 * Register an array of controllers with wildcard routing.
	 *
	 * @param array $controllers
	 * @return void 
	 * @deprecated since version 5.2.
	 * @static 
	 */
	public static function controllers($controllers){
		\Illuminate\Routing\Router::controllers($controllers);
	}

	/**
	 * Route a controller to a URI with wildcard routing.
	 *
	 * @param string $uri
	 * @param string $controller
	 * @param array $names
	 * @return void 
	 * @deprecated since version 5.2.
	 * @static 
	 */
	public static function controller($uri, $controller, $names = array()){
		\Illuminate\Routing\Router::controller($uri, $controller, $names);
	}

	/**
	 * Set the unmapped global resource parameters to singular.
	 *
	 * @return void 
	 * @static 
	 */
	public static function singularResourceParameters(){
		\Illuminate\Routing\Router::singularResourceParameters();
	}

	/**
	 * Set the global resource parameter mapping.
	 *
	 * @param array $parameters
	 * @return void 
	 * @static 
	 */
	public static function resourceParameters($parameters = array()){
		\Illuminate\Routing\Router::resourceParameters($parameters);
	}

	/**
	 * Register an array of resource controllers.
	 *
	 * @param array $resources
	 * @return void 
	 * @static 
	 */
	public static function resources($resources){
		\Illuminate\Routing\Router::resources($resources);
	}

	/**
	 * Route a resource to a controller.
	 *
	 * @param string $name
	 * @param string $controller
	 * @param array $options
	 * @return void 
	 * @static 
	 */
	public static function resource($name, $controller, $options = array()){
		\Illuminate\Routing\Router::resource($name, $controller, $options);
	}

	/**
	 * Register the typical authentication routes for an application.
	 *
	 * @return void 
	 * @static 
	 */
	public static function auth(){
		\Illuminate\Routing\Router::auth();
	}

	/**
	 * Create a route group with shared attributes.
	 *
	 * @param array $attributes
	 * @param \Closure $callback
	 * @return void 
	 * @static 
	 */
	public static function group($attributes, $callback){
		\Illuminate\Routing\Router::group($attributes, $callback);
	}

	/**
	 * Merge the given array with the last group stack.
	 *
	 * @param array $new
	 * @return array 
	 * @static 
	 */
	public static function mergeWithLastGroup($new){
		return \Illuminate\Routing\Router::mergeWithLastGroup($new);
	}

	/**
	 * Merge the given group attributes.
	 *
	 * @param array $new
	 * @param array $old
	 * @return array 
	 * @static 
	 */
	public static function mergeGroup($new, $old){
		return \Illuminate\Routing\Router::mergeGroup($new, $old);
	}

	/**
	 * Get the prefix from the last group on the stack.
	 *
	 * @return string 
	 * @static 
	 */
	public static function getLastGroupPrefix(){
		return \Illuminate\Routing\Router::getLastGroupPrefix();
	}

	/**
	 * Dispatch the request to the application.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response 
	 * @static 
	 */
	public static function dispatch($request){
		return \Illuminate\Routing\Router::dispatch($request);
	}

	/**
	 * Dispatch the request to a route and return the response.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return mixed 
	 * @static 
	 */
	public static function dispatchToRoute($request){
		return \Illuminate\Routing\Router::dispatchToRoute($request);
	}

	/**
	 * Gather the middleware for the given route.
	 *
	 * @param \Illuminate\Routing\Route $route
	 * @return array 
	 * @static 
	 */
	public static function gatherRouteMiddlewares($route){
		return \Illuminate\Routing\Router::gatherRouteMiddlewares($route);
	}

	/**
	 * Resolve the middleware name to a class name(s) preserving passed parameters.
	 *
	 * @param string $name
	 * @return string|array 
	 * @static 
	 */
	public static function resolveMiddlewareClassName($name){
		return \Illuminate\Routing\Router::resolveMiddlewareClassName($name);
	}

	/**
	 * Register a route matched event listener.
	 *
	 * @param string|callable $callback
	 * @return void 
	 * @static 
	 */
	public static function matched($callback){
		\Illuminate\Routing\Router::matched($callback);
	}

	/**
	 * Get all of the defined middleware short-hand names.
	 *
	 * @return array 
	 * @static 
	 */
	public static function getMiddleware(){
		return \Illuminate\Routing\Router::getMiddleware();
	}

	/**
	 * Register a short-hand name for a middleware.
	 *
	 * @param string $name
	 * @param string $class
	 * @return $this 
	 * @static 
	 */
	public static function middleware($name, $class){
		return \Illuminate\Routing\Router::middleware($name, $class);
	}

	/**
	 * Register a group of middleware.
	 *
	 * @param string $name
	 * @param array $middleware
	 * @return $this 
	 * @static 
	 */
	public static function middlewareGroup($name, $middleware){
		return \Illuminate\Routing\Router::middlewareGroup($name, $middleware);
	}

	/**
	 * Add a middleware to the beginning of a middleware group.
	 * 
	 * If the middleware is already in the group, it will not be added again.
	 *
	 * @param string $group
	 * @param string $middleware
	 * @return $this 
	 * @static 
	 */
	public static function prependMiddlewareToGroup($group, $middleware){
		return \Illuminate\Routing\Router::prependMiddlewareToGroup($group, $middleware);
	}

	/**
	 * Add a middleware to the end of a middleware group.
	 * 
	 * If the middleware is already in the group, it will not be added again.
	 *
	 * @param string $group
	 * @param string $middleware
	 * @return $this 
	 * @static 
	 */
	public static function pushMiddlewareToGroup($group, $middleware){
		return \Illuminate\Routing\Router::pushMiddlewareToGroup($group, $middleware);
	}

	/**
	 * Register a model binder for a wildcard.
	 *
	 * @param string $key
	 * @param string $class
	 * @param \Closure|null $callback
	 * @return void 
	 * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
	 * @static 
	 */
	public static function model($key, $class, $callback = null){
		\Illuminate\Routing\Router::model($key, $class, $callback);
	}

	/**
	 * Add a new route parameter binder.
	 *
	 * @param string $key
	 * @param string|callable $binder
	 * @return void 
	 * @static 
	 */
	public static function bind($key, $binder){
		\Illuminate\Routing\Router::bind($key, $binder);
	}

	/**
	 * Create a class based binding using the IoC container.
	 *
	 * @param string $binding
	 * @return \Closure 
	 * @static 
	 */
	public static function createClassBinding($binding){
		return \Illuminate\Routing\Router::createClassBinding($binding);
	}

	/**
	 * Set a global where pattern on all routes.
	 *
	 * @param string $key
	 * @param string $pattern
	 * @return void 
	 * @static 
	 */
	public static function pattern($key, $pattern){
		\Illuminate\Routing\Router::pattern($key, $pattern);
	}

	/**
	 * Set a group of global where patterns on all routes.
	 *
	 * @param array $patterns
	 * @return void 
	 * @static 
	 */
	public static function patterns($patterns){
		\Illuminate\Routing\Router::patterns($patterns);
	}

	/**
	 * Create a response instance from the given value.
	 *
	 * @param \Symfony\Component\HttpFoundation\Request $request
	 * @param mixed $response
	 * @return \Illuminate\Http\Response 
	 * @static 
	 */
	public static function prepareResponse($request, $response){
		return \Illuminate\Routing\Router::prepareResponse($request, $response);
	}

	/**
	 * Determine if the router currently has a group stack.
	 *
	 * @return bool 
	 * @static 
	 */
	public static function hasGroupStack(){
		return \Illuminate\Routing\Router::hasGroupStack();
	}

	/**
	 * Get the current group stack for the router.
	 *
	 * @return array 
	 * @static 
	 */
	public static function getGroupStack(){
		return \Illuminate\Routing\Router::getGroupStack();
	}

	/**
	 * Get a route parameter for the current route.
	 *
	 * @param string $key
	 * @param string $default
	 * @return mixed 
	 * @static 
	 */
	public static function input($key, $default = null){
		return \Illuminate\Routing\Router::input($key, $default);
	}

	/**
	 * Get the currently dispatched route instance.
	 *
	 * @return \Illuminate\Routing\Route 
	 * @static 
	 */
	public static function getCurrentRoute(){
		return \Illuminate\Routing\Router::getCurrentRoute();
	}

	/**
	 * Get the currently dispatched route instance.
	 *
	 * @return \Illuminate\Routing\Route 
	 * @static 
	 */
	public static function current(){
		return \Illuminate\Routing\Router::current();
	}

	/**
	 * Check if a route with the given name exists.
	 *
	 * @param string $name
	 * @return bool 
	 * @static 
	 */
	public static function has($name){
		return \Illuminate\Routing\Router::has($name);
	}

	/**
	 * Get the current route name.
	 *
	 * @return string|null 
	 * @static 
	 */
	public static function currentRouteName(){
		return \Illuminate\Routing\Router::currentRouteName();
	}

	/**
	 * Alias for the "currentRouteName" method.
	 *
	 * @param mixed  string
	 * @return bool 
	 * @static 
	 */
	public static function is(){
		return \Illuminate\Routing\Router::is();
	}

	/**
	 * Determine if the current route matches a given name.
	 *
	 * @param string $name
	 * @return bool 
	 * @static 
	 */
	public static function currentRouteNamed($name){
		return \Illuminate\Routing\Router::currentRouteNamed($name);
	}

	/**
	 * Get the current route action.
	 *
	 * @return string|null 
	 * @static 
	 */
	public static function currentRouteAction(){
		return \Illuminate\Routing\Router::currentRouteAction();
	}

	/**
	 * Alias for the "currentRouteUses" method.
	 *
	 * @param mixed  string
	 * @return bool 
	 * @static 
	 */
	public static function uses(){
		return \Illuminate\Routing\Router::uses();
	}

	/**
	 * Determine if the current route action matches a given action.
	 *
	 * @param string $action
	 * @return bool 
	 * @static 
	 */
	public static function currentRouteUses($action){
		return \Illuminate\Routing\Router::currentRouteUses($action);
	}

	/**
	 * Get the request currently being dispatched.
	 *
	 * @return \Illuminate\Http\Request 
	 * @static 
	 */
	public static function getCurrentRequest(){
		return \Illuminate\Routing\Router::getCurrentRequest();
	}

	/**
	 * Get the underlying route collection.
	 *
	 * @return \Illuminate\Routing\RouteCollection 
	 * @static 
	 */
	public static function getRoutes(){
		return \Illuminate\Routing\Router::getRoutes();
	}

	/**
	 * Set the route collection instance.
	 *
	 * @param \Illuminate\Routing\RouteCollection $routes
	 * @return void 
	 * @static 
	 */
	public static function setRoutes($routes){
		\Illuminate\Routing\Router::setRoutes($routes);
	}

	/**
	 * Get the global "where" patterns.
	 *
	 * @return array 
	 * @static 
	 */
	public static function getPatterns(){
		return \Illuminate\Routing\Router::getPatterns();
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
		\Illuminate\Routing\Router::macro($name, $macro);
	}

	/**
	 * Checks if macro is registered.
	 *
	 * @param string $name
	 * @return bool 
	 * @static 
	 */
	public static function hasMacro($name){
		return \Illuminate\Routing\Router::hasMacro($name);
	}

}
