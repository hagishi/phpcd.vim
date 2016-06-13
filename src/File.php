<?php

class File extends \Illuminate\Support\Facades\File
{

	/**
	 * Determine if a file or directory exists.
	 *
	 * @param string $path
	 * @return bool 
	 * @static 
	 */
	public static function exists($path){
		return \Illuminate\Filesystem\Filesystem::exists($path);
	}

	/**
	 * Get the contents of a file.
	 *
	 * @param string $path
	 * @param bool $lock
	 * @return string 
	 * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
	 * @static 
	 */
	public static function get($path, $lock = false){
		return \Illuminate\Filesystem\Filesystem::get($path, $lock);
	}

	/**
	 * Get contents of a file with shared access.
	 *
	 * @param string $path
	 * @return string 
	 * @static 
	 */
	public static function sharedGet($path){
		return \Illuminate\Filesystem\Filesystem::sharedGet($path);
	}

	/**
	 * Get the returned value of a file.
	 *
	 * @param string $path
	 * @return mixed 
	 * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
	 * @static 
	 */
	public static function getRequire($path){
		return \Illuminate\Filesystem\Filesystem::getRequire($path);
	}

	/**
	 * Require the given file once.
	 *
	 * @param string $file
	 * @return mixed 
	 * @static 
	 */
	public static function requireOnce($file){
		return \Illuminate\Filesystem\Filesystem::requireOnce($file);
	}

	/**
	 * Write the contents of a file.
	 *
	 * @param string $path
	 * @param string $contents
	 * @param bool $lock
	 * @return int 
	 * @static 
	 */
	public static function put($path, $contents, $lock = false){
		return \Illuminate\Filesystem\Filesystem::put($path, $contents, $lock);
	}

	/**
	 * Prepend to a file.
	 *
	 * @param string $path
	 * @param string $data
	 * @return int 
	 * @static 
	 */
	public static function prepend($path, $data){
		return \Illuminate\Filesystem\Filesystem::prepend($path, $data);
	}

	/**
	 * Append to a file.
	 *
	 * @param string $path
	 * @param string $data
	 * @return int 
	 * @static 
	 */
	public static function append($path, $data){
		return \Illuminate\Filesystem\Filesystem::append($path, $data);
	}

	/**
	 * Delete the file at a given path.
	 *
	 * @param string|array $paths
	 * @return bool 
	 * @static 
	 */
	public static function delete($paths){
		return \Illuminate\Filesystem\Filesystem::delete($paths);
	}

	/**
	 * Move a file to a new location.
	 *
	 * @param string $path
	 * @param string $target
	 * @return bool 
	 * @static 
	 */
	public static function move($path, $target){
		return \Illuminate\Filesystem\Filesystem::move($path, $target);
	}

	/**
	 * Copy a file to a new location.
	 *
	 * @param string $path
	 * @param string $target
	 * @return bool 
	 * @static 
	 */
	public static function copy($path, $target){
		return \Illuminate\Filesystem\Filesystem::copy($path, $target);
	}

	/**
	 * Extract the file name from a file path.
	 *
	 * @param string $path
	 * @return string 
	 * @static 
	 */
	public static function name($path){
		return \Illuminate\Filesystem\Filesystem::name($path);
	}

	/**
	 * Extract the trailing name component from a file path.
	 *
	 * @param string $path
	 * @return string 
	 * @static 
	 */
	public static function basename($path){
		return \Illuminate\Filesystem\Filesystem::basename($path);
	}

	/**
	 * Extract the parent directory from a file path.
	 *
	 * @param string $path
	 * @return string 
	 * @static 
	 */
	public static function dirname($path){
		return \Illuminate\Filesystem\Filesystem::dirname($path);
	}

	/**
	 * Extract the file extension from a file path.
	 *
	 * @param string $path
	 * @return string 
	 * @static 
	 */
	public static function extension($path){
		return \Illuminate\Filesystem\Filesystem::extension($path);
	}

	/**
	 * Get the file type of a given file.
	 *
	 * @param string $path
	 * @return string 
	 * @static 
	 */
	public static function type($path){
		return \Illuminate\Filesystem\Filesystem::type($path);
	}

	/**
	 * Get the mime-type of a given file.
	 *
	 * @param string $path
	 * @return string|false 
	 * @static 
	 */
	public static function mimeType($path){
		return \Illuminate\Filesystem\Filesystem::mimeType($path);
	}

	/**
	 * Get the file size of a given file.
	 *
	 * @param string $path
	 * @return int 
	 * @static 
	 */
	public static function size($path){
		return \Illuminate\Filesystem\Filesystem::size($path);
	}

	/**
	 * Get the file's last modification time.
	 *
	 * @param string $path
	 * @return int 
	 * @static 
	 */
	public static function lastModified($path){
		return \Illuminate\Filesystem\Filesystem::lastModified($path);
	}

	/**
	 * Determine if the given path is a directory.
	 *
	 * @param string $directory
	 * @return bool 
	 * @static 
	 */
	public static function isDirectory($directory){
		return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
	}

	/**
	 * Determine if the given path is writable.
	 *
	 * @param string $path
	 * @return bool 
	 * @static 
	 */
	public static function isWritable($path){
		return \Illuminate\Filesystem\Filesystem::isWritable($path);
	}

	/**
	 * Determine if the given path is a file.
	 *
	 * @param string $file
	 * @return bool 
	 * @static 
	 */
	public static function isFile($file){
		return \Illuminate\Filesystem\Filesystem::isFile($file);
	}

	/**
	 * Find path names matching a given pattern.
	 *
	 * @param string $pattern
	 * @param int $flags
	 * @return array 
	 * @static 
	 */
	public static function glob($pattern, $flags = 0){
		return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
	}

	/**
	 * Get an array of all files in a directory.
	 *
	 * @param string $directory
	 * @return array 
	 * @static 
	 */
	public static function files($directory){
		return \Illuminate\Filesystem\Filesystem::files($directory);
	}

	/**
	 * Get all of the files from the given directory (recursive).
	 *
	 * @param string $directory
	 * @param bool $hidden
	 * @return array 
	 * @static 
	 */
	public static function allFiles($directory, $hidden = false){
		return \Illuminate\Filesystem\Filesystem::allFiles($directory, $hidden);
	}

	/**
	 * Get all of the directories within a given directory.
	 *
	 * @param string $directory
	 * @return array 
	 * @static 
	 */
	public static function directories($directory){
		return \Illuminate\Filesystem\Filesystem::directories($directory);
	}

	/**
	 * Create a directory.
	 *
	 * @param string $path
	 * @param int $mode
	 * @param bool $recursive
	 * @param bool $force
	 * @return bool 
	 * @static 
	 */
	public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false){
		return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
	}

	/**
	 * Copy a directory from one location to another.
	 *
	 * @param string $directory
	 * @param string $destination
	 * @param int $options
	 * @return bool 
	 * @static 
	 */
	public static function copyDirectory($directory, $destination, $options = null){
		return \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
	}

	/**
	 * Recursively delete a directory.
	 * 
	 * The directory itself may be optionally preserved.
	 *
	 * @param string $directory
	 * @param bool $preserve
	 * @return bool 
	 * @static 
	 */
	public static function deleteDirectory($directory, $preserve = false){
		return \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
	}

	/**
	 * Empty the specified directory of all files and folders.
	 *
	 * @param string $directory
	 * @return bool 
	 * @static 
	 */
	public static function cleanDirectory($directory){
		return \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
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
		\Illuminate\Filesystem\Filesystem::macro($name, $macro);
	}

	/**
	 * Checks if macro is registered.
	 *
	 * @param string $name
	 * @return bool 
	 * @static 
	 */
	public static function hasMacro($name){
		return \Illuminate\Filesystem\Filesystem::hasMacro($name);
	}

}
