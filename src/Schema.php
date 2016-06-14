<?php

class Schema extends \Illuminate\Support\Facades\Schema
{

	/**
	 * Determine if the given table exists.
	 *
	 * @param string $table
	 * @return bool 
	 * @static 
	 */
	public static function hasTable($table){
		return \Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
	}

	/**
	 * Get the column listing for a given table.
	 *
	 * @param string $table
	 * @return array 
	 * @static 
	 */
	public static function getColumnListing($table){
		return \Illuminate\Database\Schema\MySqlBuilder::getColumnListing($table);
	}

	/**
	 * Determine if the given table has a given column.
	 *
	 * @param string $table
	 * @param string $column
	 * @return bool 
	 * @static 
	 */
	public static function hasColumn($table, $column){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		return \Illuminate\Database\Schema\MySqlBuilder::hasColumn($table, $column);
	}

	/**
	 * Determine if the given table has given columns.
	 *
	 * @param string $table
	 * @param array $columns
	 * @return bool 
	 * @static 
	 */
	public static function hasColumns($table, $columns){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		return \Illuminate\Database\Schema\MySqlBuilder::hasColumns($table, $columns);
	}

	/**
	 * Get the data type for the given column name.
	 *
	 * @param string $table
	 * @param string $column
	 * @return string 
	 * @static 
	 */
	public static function getColumnType($table, $column){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		return \Illuminate\Database\Schema\MySqlBuilder::getColumnType($table, $column);
	}

	/**
	 * Modify a table on the schema.
	 *
	 * @param string $table
	 * @param \Closure $callback
	 * @return \Illuminate\Database\Schema\Blueprint 
	 * @static 
	 */
	public static function table($table, $callback){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		return \Illuminate\Database\Schema\MySqlBuilder::table($table, $callback);
	}

	/**
	 * Create a new table on the schema.
	 *
	 * @param string $table
	 * @param \Closure $callback
	 * @return \Illuminate\Database\Schema\Blueprint 
	 * @static 
	 */
	public static function create($table, $callback){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		return \Illuminate\Database\Schema\MySqlBuilder::create($table, $callback);
	}

	/**
	 * Drop a table from the schema.
	 *
	 * @param string $table
	 * @return \Illuminate\Database\Schema\Blueprint 
	 * @static 
	 */
	public static function drop($table){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		return \Illuminate\Database\Schema\MySqlBuilder::drop($table);
	}

	/**
	 * Drop a table from the schema if it exists.
	 *
	 * @param string $table
	 * @return \Illuminate\Database\Schema\Blueprint 
	 * @static 
	 */
	public static function dropIfExists($table){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		return \Illuminate\Database\Schema\MySqlBuilder::dropIfExists($table);
	}

	/**
	 * Rename a table on the schema.
	 *
	 * @param string $from
	 * @param string $to
	 * @return \Illuminate\Database\Schema\Blueprint 
	 * @static 
	 */
	public static function rename($from, $to){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		return \Illuminate\Database\Schema\MySqlBuilder::rename($from, $to);
	}

	/**
	 * Get the database connection instance.
	 *
	 * @return \Illuminate\Database\Connection 
	 * @static 
	 */
	public static function getConnection(){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		return \Illuminate\Database\Schema\MySqlBuilder::getConnection();
	}

	/**
	 * Set the database connection instance.
	 *
	 * @param \Illuminate\Database\Connection $connection
	 * @return $this 
	 * @static 
	 */
	public static function setConnection($connection){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		return \Illuminate\Database\Schema\MySqlBuilder::setConnection($connection);
	}

	/**
	 * Set the Schema Blueprint resolver callback.
	 *
	 * @param \Closure $resolver
	 * @return void 
	 * @static 
	 */
	public static function blueprintResolver($resolver){
		//Method inherited from \Illuminate\Database\Schema\Builder            
		\Illuminate\Database\Schema\MySqlBuilder::blueprintResolver($resolver);
	}

}
