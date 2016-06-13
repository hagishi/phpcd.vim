<?php

class View extends \Illuminate\Support\Facades\View
{

	/**
	 * Get the evaluated view contents for the given view.
	 *
	 * @param string $path
	 * @param array $data
	 * @param array $mergeData
	 * @return \Illuminate\Contracts\View\View 
	 * @static 
	 */
	public static function file($path, $data = array(), $mergeData = array()){
		return \Illuminate\View\Factory::file($path, $data, $mergeData);
	}

	/**
	 * Get the evaluated view contents for the given view.
	 *
	 * @param string $view
	 * @param array $data
	 * @param array $mergeData
	 * @return \Illuminate\Contracts\View\View 
	 * @static 
	 */
	public static function make($view, $data = array(), $mergeData = array()){
		return \Illuminate\View\Factory::make($view, $data, $mergeData);
	}

	/**
	 * Get the evaluated view contents for a named view.
	 *
	 * @param string $view
	 * @param mixed $data
	 * @return \Illuminate\Contracts\View\View 
	 * @static 
	 */
	public static function of($view, $data = array()){
		return \Illuminate\View\Factory::of($view, $data);
	}

	/**
	 * Register a named view.
	 *
	 * @param string $view
	 * @param string $name
	 * @return void 
	 * @static 
	 */
	public static function name($view, $name){
		\Illuminate\View\Factory::name($view, $name);
	}

	/**
	 * Add an alias for a view.
	 *
	 * @param string $view
	 * @param string $alias
	 * @return void 
	 * @static 
	 */
	public static function alias($view, $alias){
		\Illuminate\View\Factory::alias($view, $alias);
	}

	/**
	 * Determine if a given view exists.
	 *
	 * @param string $view
	 * @return bool 
	 * @static 
	 */
	public static function exists($view){
		return \Illuminate\View\Factory::exists($view);
	}

	/**
	 * Get the rendered contents of a partial from a loop.
	 *
	 * @param string $view
	 * @param array $data
	 * @param string $iterator
	 * @param string $empty
	 * @return string 
	 * @static 
	 */
	public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
		return \Illuminate\View\Factory::renderEach($view, $data, $iterator, $empty);
	}

	/**
	 * Get the appropriate view engine for the given path.
	 *
	 * @param string $path
	 * @return \Illuminate\View\Engines\EngineInterface 
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	public static function getEngineFromPath($path){
		return \Illuminate\View\Factory::getEngineFromPath($path);
	}

	/**
	 * Add a piece of shared data to the environment.
	 *
	 * @param array|string $key
	 * @param mixed $value
	 * @return mixed 
	 * @static 
	 */
	public static function share($key, $value = null){
		return \Illuminate\View\Factory::share($key, $value);
	}

	/**
	 * Register a view creator event.
	 *
	 * @param array|string $views
	 * @param \Closure|string $callback
	 * @return array 
	 * @static 
	 */
	public static function creator($views, $callback){
		return \Illuminate\View\Factory::creator($views, $callback);
	}

	/**
	 * Register multiple view composers via an array.
	 *
	 * @param array $composers
	 * @return array 
	 * @static 
	 */
	public static function composers($composers){
		return \Illuminate\View\Factory::composers($composers);
	}

	/**
	 * Register a view composer event.
	 *
	 * @param array|string $views
	 * @param \Closure|string $callback
	 * @param int|null $priority
	 * @return array 
	 * @static 
	 */
	public static function composer($views, $callback, $priority = null){
		return \Illuminate\View\Factory::composer($views, $callback, $priority);
	}

	/**
	 * Call the composer for a given view.
	 *
	 * @param \Illuminate\Contracts\View\View $view
	 * @return void 
	 * @static 
	 */
	public static function callComposer($view){
		\Illuminate\View\Factory::callComposer($view);
	}

	/**
	 * Call the creator for a given view.
	 *
	 * @param \Illuminate\Contracts\View\View $view
	 * @return void 
	 * @static 
	 */
	public static function callCreator($view){
		\Illuminate\View\Factory::callCreator($view);
	}

	/**
	 * Start injecting content into a section.
	 *
	 * @param string $section
	 * @param string $content
	 * @return void 
	 * @static 
	 */
	public static function startSection($section, $content = ''){
		\Illuminate\View\Factory::startSection($section, $content);
	}

	/**
	 * Inject inline content into a section.
	 *
	 * @param string $section
	 * @param string $content
	 * @return void 
	 * @static 
	 */
	public static function inject($section, $content){
		\Illuminate\View\Factory::inject($section, $content);
	}

	/**
	 * Stop injecting content into a section and return its contents.
	 *
	 * @return string 
	 * @static 
	 */
	public static function yieldSection(){
		return \Illuminate\View\Factory::yieldSection();
	}

	/**
	 * Stop injecting content into a section.
	 *
	 * @param bool $overwrite
	 * @return string 
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	public static function stopSection($overwrite = false){
		return \Illuminate\View\Factory::stopSection($overwrite);
	}

	/**
	 * Stop injecting content into a section and append it.
	 *
	 * @return string 
	 * @throws \InvalidArgumentException
	 * @static 
	 */
	public static function appendSection(){
		return \Illuminate\View\Factory::appendSection();
	}

	/**
	 * Get the string contents of a section.
	 *
	 * @param string $section
	 * @param string $default
	 * @return string 
	 * @static 
	 */
	public static function yieldContent($section, $default = ''){
		return \Illuminate\View\Factory::yieldContent($section, $default);
	}

	/**
	 * Flush all of the section contents.
	 *
	 * @return void 
	 * @static 
	 */
	public static function flushSections(){
		\Illuminate\View\Factory::flushSections();
	}

	/**
	 * Flush all of the section contents if done rendering.
	 *
	 * @return void 
	 * @static 
	 */
	public static function flushSectionsIfDoneRendering(){
		\Illuminate\View\Factory::flushSectionsIfDoneRendering();
	}

	/**
	 * Increment the rendering counter.
	 *
	 * @return void 
	 * @static 
	 */
	public static function incrementRender(){
		\Illuminate\View\Factory::incrementRender();
	}

	/**
	 * Decrement the rendering counter.
	 *
	 * @return void 
	 * @static 
	 */
	public static function decrementRender(){
		\Illuminate\View\Factory::decrementRender();
	}

	/**
	 * Check if there are no active render operations.
	 *
	 * @return bool 
	 * @static 
	 */
	public static function doneRendering(){
		return \Illuminate\View\Factory::doneRendering();
	}

	/**
	 * Add a location to the array of view locations.
	 *
	 * @param string $location
	 * @return void 
	 * @static 
	 */
	public static function addLocation($location){
		\Illuminate\View\Factory::addLocation($location);
	}

	/**
	 * Add a new namespace to the loader.
	 *
	 * @param string $namespace
	 * @param string|array $hints
	 * @return void 
	 * @static 
	 */
	public static function addNamespace($namespace, $hints){
		\Illuminate\View\Factory::addNamespace($namespace, $hints);
	}

	/**
	 * Prepend a new namespace to the loader.
	 *
	 * @param string $namespace
	 * @param string|array $hints
	 * @return void 
	 * @static 
	 */
	public static function prependNamespace($namespace, $hints){
		\Illuminate\View\Factory::prependNamespace($namespace, $hints);
	}

	/**
	 * Register a valid view extension and its engine.
	 *
	 * @param string $extension
	 * @param string $engine
	 * @param \Closure $resolver
	 * @return void 
	 * @static 
	 */
	public static function addExtension($extension, $engine, $resolver = null){
		\Illuminate\View\Factory::addExtension($extension, $engine, $resolver);
	}

	/**
	 * Get the extension to engine bindings.
	 *
	 * @return array 
	 * @static 
	 */
	public static function getExtensions(){
		return \Illuminate\View\Factory::getExtensions();
	}

	/**
	 * Get the engine resolver instance.
	 *
	 * @return \Illuminate\View\Engines\EngineResolver 
	 * @static 
	 */
	public static function getEngineResolver(){
		return \Illuminate\View\Factory::getEngineResolver();
	}

	/**
	 * Get the view finder instance.
	 *
	 * @return \Illuminate\View\ViewFinderInterface 
	 * @static 
	 */
	public static function getFinder(){
		return \Illuminate\View\Factory::getFinder();
	}

	/**
	 * Set the view finder instance.
	 *
	 * @param \Illuminate\View\ViewFinderInterface $finder
	 * @return void 
	 * @static 
	 */
	public static function setFinder($finder){
		\Illuminate\View\Factory::setFinder($finder);
	}

	/**
	 * Get the event dispatcher instance.
	 *
	 * @return \Illuminate\Contracts\Events\Dispatcher 
	 * @static 
	 */
	public static function getDispatcher(){
		return \Illuminate\View\Factory::getDispatcher();
	}

	/**
	 * Set the event dispatcher instance.
	 *
	 * @param \Illuminate\Contracts\Events\Dispatcher $events
	 * @return void 
	 * @static 
	 */
	public static function setDispatcher($events){
		\Illuminate\View\Factory::setDispatcher($events);
	}

	/**
	 * Get the IoC container instance.
	 *
	 * @return \Illuminate\Contracts\Container\Container 
	 * @static 
	 */
	public static function getContainer(){
		return \Illuminate\View\Factory::getContainer();
	}

	/**
	 * Set the IoC container instance.
	 *
	 * @param \Illuminate\Contracts\Container\Container $container
	 * @return void 
	 * @static 
	 */
	public static function setContainer($container){
		\Illuminate\View\Factory::setContainer($container);
	}

	/**
	 * Get an item from the shared data.
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed 
	 * @static 
	 */
	public static function shared($key, $default = null){
		return \Illuminate\View\Factory::shared($key, $default);
	}

	/**
	 * Get all of the shared data for the environment.
	 *
	 * @return array 
	 * @static 
	 */
	public static function getShared(){
		return \Illuminate\View\Factory::getShared();
	}

	/**
	 * Check if section exists.
	 *
	 * @param string $name
	 * @return bool 
	 * @static 
	 */
	public static function hasSection($name){
		return \Illuminate\View\Factory::hasSection($name);
	}

	/**
	 * Get the entire array of sections.
	 *
	 * @return array 
	 * @static 
	 */
	public static function getSections(){
		return \Illuminate\View\Factory::getSections();
	}

	/**
	 * Get all of the registered named views in environment.
	 *
	 * @return array 
	 * @static 
	 */
	public static function getNames(){
		return \Illuminate\View\Factory::getNames();
	}

}
