<?php

class Eloquent extends \Illuminate\Database\Eloquent\Model
{

    /**
     * Register a new global scope.
     *
     * @param string $identifier
     * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
     * @return $this
     * @static
     */
    public static function withGlobalScope($identifier, $scope){
        return \Illuminate\Database\Eloquent\Builder::withGlobalScope($identifier, $scope);
    }

    /**
     * Remove a registered global scope.
     *
     * @param \Illuminate\Database\Eloquent\Scope|string $scope
     * @return $this
     * @static
     */
    public static function withoutGlobalScope($scope){
        return \Illuminate\Database\Eloquent\Builder::withoutGlobalScope($scope);
    }

    /**
     * Remove all or passed registered global scopes.
     *
     * @param array|null $scopes
     * @return $this
     * @static
     */
    public static function withoutGlobalScopes($scopes = null){
        return \Illuminate\Database\Eloquent\Builder::withoutGlobalScopes($scopes);
    }

    /**
     * Get an array of global scopes that were removed from the query.
     *
     * @return array
     * @static
     */
    public static function removedScopes(){
        return \Illuminate\Database\Eloquent\Builder::removedScopes();
    }

    /**
     * Find a model by its primary key.
     *
     * @param mixed $id
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     * @static
     */
    public static function find($id, $columns = array()){
        return \Illuminate\Database\Eloquent\Builder::find($id, $columns);
    }

    /**
     * Find multiple models by their primary keys.
     *
     * @param array $ids
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Collection
     * @static
     */
    public static function findMany($ids, $columns = array()){
        return \Illuminate\Database\Eloquent\Builder::findMany($ids, $columns);
    }

    /**
     * Find a model by its primary key or throw an exception.
     *
     * @param mixed $id
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @static
     */
    public static function findOrFail($id, $columns = array()){
        return \Illuminate\Database\Eloquent\Builder::findOrFail($id, $columns);
    }

    /**
     * Find a model by its primary key or return fresh model instance.
     *
     * @param mixed $id
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model
     * @static
     */
    public static function findOrNew($id, $columns = array()){
        return \Illuminate\Database\Eloquent\Builder::findOrNew($id, $columns);
    }

    /**
     * Get the first record matching the attributes or instantiate it.
     *
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model
     * @static
     */
    public static function firstOrNew($attributes){
        return \Illuminate\Database\Eloquent\Builder::firstOrNew($attributes);
    }

    /**
     * Get the first record matching the attributes or create it.
     *
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model
     * @static
     */
    public static function firstOrCreate($attributes){
        return \Illuminate\Database\Eloquent\Builder::firstOrCreate($attributes);
    }

    /**
     * Create or update a record matching the attributes, and fill it with values.
     *
     * @param array $attributes
     * @param array $values
     * @return \Illuminate\Database\Eloquent\Model
     * @static
     */
    public static function updateOrCreate($attributes, $values = array()){
        return \Illuminate\Database\Eloquent\Builder::updateOrCreate($attributes, $values);
    }

    /**
     * Execute the query and get the first result.
     *
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|static|null
     * @static
     */
    public static function first($columns = array()){
        return \Illuminate\Database\Eloquent\Builder::first($columns);
    }

    /**
     * Execute the query and get the first result or throw an exception.
     *
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|static
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @static
     */
    public static function firstOrFail($columns = array()){
        return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
    }

    /**
     * Execute the query as a "select" statement.
     *
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     * @static
     */
    public static function get($columns = array()){
        return \Illuminate\Database\Eloquent\Builder::get($columns);
    }

    /**
     * Get a single column's value from the first result of a query.
     *
     * @param string $column
     * @return mixed
     * @static
     */
    public static function value($column){
        return \Illuminate\Database\Eloquent\Builder::value($column);
    }

    /**
     * Get a generator for the given query.
     *
     * @return \Generator
     * @static
     */
    public static function cursor(){
        return \Illuminate\Database\Eloquent\Builder::cursor();
    }

    /**
     * Chunk the results of the query.
     *
     * @param int $count
     * @param callable $callback
     * @return bool
     * @static
     */
    public static function chunk($count, $callback){
        return \Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
    }

    /**
     * Chunk the results of a query by comparing numeric IDs.
     *
     * @param int $count
     * @param callable $callback
     * @param string $column
     * @return bool
     * @static
     */
    public static function chunkById($count, $callback, $column = 'id'){
        return \Illuminate\Database\Eloquent\Builder::chunkById($count, $callback, $column);
    }

    /**
     * Execute a callback over each item while chunking.
     *
     * @param callable $callback
     * @param int $count
     * @return bool
     * @static
     */
    public static function each($callback, $count = 1000){
        return \Illuminate\Database\Eloquent\Builder::each($callback, $count);
    }

    /**
     * Get an array with the values of a given column.
     *
     * @param string $column
     * @param string|null $key
     * @return \Illuminate\Support\Collection
     * @static
     */
    public static function pluck($column, $key = null){
        return \Illuminate\Database\Eloquent\Builder::pluck($column, $key);
    }

    /**
     * Alias for the "pluck" method.
     *
     * @param string $column
     * @param string $key
     * @return \Illuminate\Support\Collection
     * @deprecated since version 5.2. Use the "pluck" method directly.
     * @static
     */
    public static function lists($column, $key = null){
        return \Illuminate\Database\Eloquent\Builder::lists($column, $key);
    }

    /**
     * Paginate the given query.
     *
     * @param int $perPage
     * @param array $columns
     * @param string $pageName
     * @param int|null $page
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     * @throws \InvalidArgumentException
     * @static
     */
    public static function paginate($perPage = null, $columns = array(), $pageName = 'page', $page = null){
        return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns, $pageName, $page);
    }

    /**
     * Paginate the given query into a simple paginator.
     *
     * @param int $perPage
     * @param array $columns
     * @param string $pageName
     * @param int|null $page
     * @return \Illuminate\Contracts\Pagination\Paginator
     * @static
     */
    public static function simplePaginate($perPage = null, $columns = array(), $pageName = 'page', $page = null){
        return \Illuminate\Database\Eloquent\Builder::simplePaginate($perPage, $columns, $pageName, $page);
    }

    /**
     * Register a replacement for the default delete function.
     *
     * @param \Closure $callback
     * @return void
     * @static
     */
    public static function onDelete($callback){
        \Illuminate\Database\Eloquent\Builder::onDelete($callback);
    }

    /**
     * Get the hydrated models without eager loading.
     *
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model[]
     * @static
     */
    public static function getModels($columns = array()){
        return \Illuminate\Database\Eloquent\Builder::getModels($columns);
    }

    /**
     * Eager load the relationships for the models.
     *
     * @param array $models
     * @return array
     * @static
     */
    public static function eagerLoadRelations($models){
        return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
    }

    /**
     * Get the deeply nested relations for a given top-level relation.
     *
     * @param string $relation
     * @return array
     * @static
     */
    public static function nestedRelations($relation){
        return \Illuminate\Database\Eloquent\Builder::nestedRelations($relation);
    }

    /**
     * Apply the callback's query changes if the given "value" is true.
     *
     * @param bool $value
     * @param \Closure $callback
     * @return \Illuminate\Database\Query\Builder
     * @static
     */
    public static function when($value, $callback){
        return \Illuminate\Database\Eloquent\Builder::when($value, $callback);
    }

    /**
     * Add a basic where clause to the query.
     *
     * @param string $column
     * @param string $operator
     * @param mixed $value
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder
     * @static
     */
    public static function where($column, $operator = null, $value = null, $boolean = 'and'){
        return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
    }

    /**
     * Add an "or where" clause to the query.
     *
     * @param string $column
     * @param string $operator
     * @param mixed $value
     * @return \Illuminate\Database\Eloquent\Builder|static
     * @static
     */
    public static function orWhere($column, $operator = null, $value = null){
        return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
    }

    /**
     * Add a relationship count / exists condition to the query.
     *
     * @param string $relation
     * @param string $operator
     * @param int $count
     * @param string $boolean
     * @param \Closure|null $callback
     * @return \Illuminate\Database\Eloquent\Builder|static
     * @static
     */
    public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null){
        return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
    }

    /**
     * Add a relationship count / exists condition to the query.
     *
     * @param string $relation
     * @param string $boolean
     * @param \Closure|null $callback
     * @return \Illuminate\Database\Eloquent\Builder|static
     * @static
     */
    public static function doesntHave($relation, $boolean = 'and', $callback = null){
        return \Illuminate\Database\Eloquent\Builder::doesntHave($relation, $boolean, $callback);
    }

    /**
     * Add a relationship count / exists condition to the query with where clauses.
     *
     * @param string $relation
     * @param \Closure $callback
     * @param string $operator
     * @param int $count
     * @return \Illuminate\Database\Eloquent\Builder|static
     * @static
     */
    public static function whereHas($relation, $callback, $operator = '>=', $count = 1){
        return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
    }

    /**
     * Add a relationship count / exists condition to the query with where clauses.
     *
     * @param string $relation
     * @param \Closure|null $callback
     * @return \Illuminate\Database\Eloquent\Builder|static
     * @static
     */
    public static function whereDoesntHave($relation, $callback = null){
        return \Illuminate\Database\Eloquent\Builder::whereDoesntHave($relation, $callback);
    }

    /**
     * Add a relationship count / exists condition to the query with an "or".
     *
     * @param string $relation
     * @param string $operator
     * @param int $count
     * @return \Illuminate\Database\Eloquent\Builder|static
     * @static
     */
    public static function orHas($relation, $operator = '>=', $count = 1){
        return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
    }

    /**
     * Add a relationship count / exists condition to the query with where clauses and an "or".
     *
     * @param string $relation
     * @param \Closure $callback
     * @param string $operator
     * @param int $count
     * @return \Illuminate\Database\Eloquent\Builder|static
     * @static
     */
    public static function orWhereHas($relation, $callback, $operator = '>=', $count = 1){
        return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
    }

    /**
     * Merge the constraints from a relation query to the current query.
     *
     * @param \Illuminate\Database\Eloquent\Builder $relation
     * @return \Illuminate\Database\Eloquent\Builder|static
     * @static
     */
    public static function mergeModelDefinedRelationConstraints($relation){
        return \Illuminate\Database\Eloquent\Builder::mergeModelDefinedRelationConstraints($relation);
    }

    /**
     * Add subselect queries to count the relations.
     *
     * @param mixed $relations
     * @return \Illuminate\Database\Query\Builder
     * @static
     */
    public static function withCount($relations){
        return \Illuminate\Database\Eloquent\Builder::withCount($relations);
    }

    /**
     * Apply the scopes to the Eloquent builder instance and return it.
     *
     * @return \Illuminate\Database\Eloquent\Builder|static
     * @static
     */
    public static function applyScopes(){
        return \Illuminate\Database\Eloquent\Builder::applyScopes();
    }

    /**
     * Get the underlying query builder instance.
     *
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function getQuery(){
        return \Illuminate\Database\Eloquent\Builder::getQuery();
    }

    /**
     * Get a base query builder instance.
     *
     * @return \Illuminate\Database\Query\Builder
     * @static
     */
    public static function toBase(){
        return \Illuminate\Database\Eloquent\Builder::toBase();
    }

    /**
     * Set the underlying query builder instance.
     *
     * @param \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Query\Builder
     * @static
     */
    public static function setQuery($query){
        return \Illuminate\Database\Eloquent\Builder::setQuery($query);
    }

    /**
     * Get the relationships being eagerly loaded.
     *
     * @return array
     * @static
     */
    public static function getEagerLoads(){
        return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
    }

    /**
     * Set the relationships being eagerly loaded.
     *
     * @param array $eagerLoad
     * @return \Illuminate\Database\Query\Builder
     * @static
     */
    public static function setEagerLoads($eagerLoad){
        return \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
    }

    /**
     * Get the model instance being queried.
     *
     * @return \Illuminate\Database\Eloquent\Model
     * @static
     */
    public static function getModel(){
        return \Illuminate\Database\Eloquent\Builder::getModel();
    }

    /**
     * Set a model instance for the model being queried.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return $this
     * @static
     */
    public static function setModel($model){
        return \Illuminate\Database\Eloquent\Builder::setModel($model);
    }

    /**
     * Extend the builder with a given callback.
     *
     * @param string $name
     * @param \Closure $callback
     * @return void
     * @static
     */
    public static function macro($name, $callback){
        \Illuminate\Database\Eloquent\Builder::macro($name, $callback);
    }

    /**
     * Get the given macro by name.
     *
     * @param string $name
     * @return \Closure
     * @static
     */
    public static function getMacro($name){
        return \Illuminate\Database\Eloquent\Builder::getMacro($name);
    }

    /**
     * Set the columns to be selected.
     *
     * @param array|mixed $columns
     * @return $this
     * @static
     */
    public static function select($columns = array()){
        return \Illuminate\Database\Query\Builder::select($columns);
    }

    /**
     * Add a new "raw" select expression to the query.
     *
     * @param string $expression
     * @param array $bindings
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function selectRaw($expression, $bindings = array()){
        return \Illuminate\Database\Query\Builder::selectRaw($expression, $bindings);
    }

    /**
     * Add a subselect expression to the query.
     *
     * @param \Closure|\Illuminate\Database\Query\Builder|string $query
     * @param string $as
     * @return \Illuminate\Database\Query\Builder|static
     * @throws \InvalidArgumentException
     * @static
     */
    public static function selectSub($query, $as){
        return \Illuminate\Database\Query\Builder::selectSub($query, $as);
    }

    /**
     * Add a new select column to the query.
     *
     * @param array|mixed $column
     * @return $this
     * @static
     */
    public static function addSelect($column){
        return \Illuminate\Database\Query\Builder::addSelect($column);
    }

    /**
     * Force the query to only return distinct results.
     *
     * @return $this
     * @static
     */
    public static function distinct(){
        return \Illuminate\Database\Query\Builder::distinct();
    }

    /**
     * Set the table which the query is targeting.
     *
     * @param string $table
     * @return $this
     * @static
     */
    public static function from($table){
        return \Illuminate\Database\Query\Builder::from($table);
    }

    /**
     * Add a join clause to the query.
     *
     * @param string $table
     * @param string $one
     * @param string $operator
     * @param string $two
     * @param string $type
     * @param bool $where
     * @return $this
     * @static
     */
    public static function join($table, $one, $operator = null, $two = null, $type = 'inner', $where = false){
        return \Illuminate\Database\Query\Builder::join($table, $one, $operator, $two, $type, $where);
    }

    /**
     * Add a "join where" clause to the query.
     *
     * @param string $table
     * @param string $one
     * @param string $operator
     * @param string $two
     * @param string $type
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function joinWhere($table, $one, $operator, $two, $type = 'inner'){
        return \Illuminate\Database\Query\Builder::joinWhere($table, $one, $operator, $two, $type);
    }

    /**
     * Add a left join to the query.
     *
     * @param string $table
     * @param string $first
     * @param string $operator
     * @param string $second
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function leftJoin($table, $first, $operator = null, $second = null){
        return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
    }

    /**
     * Add a "join where" clause to the query.
     *
     * @param string $table
     * @param string $one
     * @param string $operator
     * @param string $two
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function leftJoinWhere($table, $one, $operator, $two){
        return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $one, $operator, $two);
    }

    /**
     * Add a right join to the query.
     *
     * @param string $table
     * @param string $first
     * @param string $operator
     * @param string $second
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function rightJoin($table, $first, $operator = null, $second = null){
        return \Illuminate\Database\Query\Builder::rightJoin($table, $first, $operator, $second);
    }

    /**
     * Add a "right join where" clause to the query.
     *
     * @param string $table
     * @param string $one
     * @param string $operator
     * @param string $two
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function rightJoinWhere($table, $one, $operator, $two){
        return \Illuminate\Database\Query\Builder::rightJoinWhere($table, $one, $operator, $two);
    }

    /**
     * Add a "cross join" clause to the query.
     *
     * @param string $table
     * @param string $first
     * @param string $operator
     * @param string $second
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function crossJoin($table, $first = null, $operator = null, $second = null){
        return \Illuminate\Database\Query\Builder::crossJoin($table, $first, $operator, $second);
    }

    /**
     * Add a "where" clause comparing two columns to the query.
     *
     * @param string|array $first
     * @param string|null $operator
     * @param string|null $second
     * @param string|null $boolean
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereColumn($first, $operator, $second, $boolean);
    }

    /**
     * Add an "or where" clause comparing two columns to the query.
     *
     * @param string|array $first
     * @param string|null $operator
     * @param string|null $second
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereColumn($first, $operator = null, $second = null){
        return \Illuminate\Database\Query\Builder::orWhereColumn($first, $operator, $second);
    }

    /**
     * Add a raw where clause to the query.
     *
     * @param string $sql
     * @param array $bindings
     * @param string $boolean
     * @return $this
     * @static
     */
    public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
    }

    /**
     * Add a raw or where clause to the query.
     *
     * @param string $sql
     * @param array $bindings
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereRaw($sql, $bindings = array()){
        return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
    }

    /**
     * Add a where between statement to the query.
     *
     * @param string $column
     * @param array $values
     * @param string $boolean
     * @param bool $not
     * @return $this
     * @static
     */
    public static function whereBetween($column, $values, $boolean = 'and', $not = false){
        return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
    }

    /**
     * Add an or where between statement to the query.
     *
     * @param string $column
     * @param array $values
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereBetween($column, $values){
        return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
    }

    /**
     * Add a where not between statement to the query.
     *
     * @param string $column
     * @param array $values
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function whereNotBetween($column, $values, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
    }

    /**
     * Add an or where not between statement to the query.
     *
     * @param string $column
     * @param array $values
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereNotBetween($column, $values){
        return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
    }

    /**
     * Add a nested where statement to the query.
     *
     * @param \Closure $callback
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function whereNested($callback, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
    }

    /**
     * Create a new query instance for nested where condition.
     *
     * @return \Illuminate\Database\Query\Builder
     * @static
     */
    public static function forNestedWhere(){
        return \Illuminate\Database\Query\Builder::forNestedWhere();
    }

    /**
     * Add another query builder as a nested where to the query builder.
     *
     * @param \Illuminate\Database\Query\Builder|static $query
     * @param string $boolean
     * @return $this
     * @static
     */
    public static function addNestedWhereQuery($query, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
    }

    /**
     * Add an exists clause to the query.
     *
     * @param \Closure $callback
     * @param string $boolean
     * @param bool $not
     * @return $this
     * @static
     */
    public static function whereExists($callback, $boolean = 'and', $not = false){
        return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
    }

    /**
     * Add an or exists clause to the query.
     *
     * @param \Closure $callback
     * @param bool $not
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereExists($callback, $not = false){
        return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
    }

    /**
     * Add a where not exists clause to the query.
     *
     * @param \Closure $callback
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function whereNotExists($callback, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
    }

    /**
     * Add a where not exists clause to the query.
     *
     * @param \Closure $callback
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereNotExists($callback){
        return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
    }

    /**
     * Add an exists clause to the query.
     *
     * @param \Illuminate\Database\Query\Builder $query
     * @param string $boolean
     * @param bool $not
     * @return $this
     * @static
     */
    public static function addWhereExistsQuery($query, $boolean = 'and', $not = false){
        return \Illuminate\Database\Query\Builder::addWhereExistsQuery($query, $boolean, $not);
    }

    /**
     * Add a "where in" clause to the query.
     *
     * @param string $column
     * @param mixed $values
     * @param string $boolean
     * @param bool $not
     * @return $this
     * @static
     */
    public static function whereIn($column, $values, $boolean = 'and', $not = false){
        return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
    }

    /**
     * Add an "or where in" clause to the query.
     *
     * @param string $column
     * @param mixed $values
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereIn($column, $values){
        return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
    }

    /**
     * Add a "where not in" clause to the query.
     *
     * @param string $column
     * @param mixed $values
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function whereNotIn($column, $values, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
    }

    /**
     * Add an "or where not in" clause to the query.
     *
     * @param string $column
     * @param mixed $values
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereNotIn($column, $values){
        return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
    }

    /**
     * Add a "where null" clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @param bool $not
     * @return $this
     * @static
     */
    public static function whereNull($column, $boolean = 'and', $not = false){
        return \Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
    }

    /**
     * Add an "or where null" clause to the query.
     *
     * @param string $column
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereNull($column){
        return \Illuminate\Database\Query\Builder::orWhereNull($column);
    }

    /**
     * Add a "where not null" clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function whereNotNull($column, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
    }

    /**
     * Add an "or where not null" clause to the query.
     *
     * @param string $column
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereNotNull($column){
        return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
    }

    /**
     * Add a "where date" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param int $value
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function whereDate($column, $operator, $value, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereDate($column, $operator, $value, $boolean);
    }

    /**
     * Add an "or where date" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param int $value
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orWhereDate($column, $operator, $value){
        return \Illuminate\Database\Query\Builder::orWhereDate($column, $operator, $value);
    }

    /**
     * Add a "where day" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param int $value
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function whereDay($column, $operator, $value, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
    }

    /**
     * Add a "where month" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param int $value
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function whereMonth($column, $operator, $value, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
    }

    /**
     * Add a "where year" statement to the query.
     *
     * @param string $column
     * @param string $operator
     * @param int $value
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function whereYear($column, $operator, $value, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
    }

    /**
     * Handles dynamic "where" clauses to the query.
     *
     * @param string $method
     * @param string $parameters
     * @return $this
     * @static
     */
    public static function dynamicWhere($method, $parameters){
        return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
    }

    /**
     * Add a "group by" clause to the query.
     *
     * @param array|string $column,...
     * @return $this
     * @static
     */
    public static function groupBy(){
        return \Illuminate\Database\Query\Builder::groupBy();
    }

    /**
     * Add a "having" clause to the query.
     *
     * @param string $column
     * @param string $operator
     * @param string $value
     * @param string $boolean
     * @return $this
     * @static
     */
    public static function having($column, $operator = null, $value = null, $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::having($column, $operator, $value, $boolean);
    }

    /**
     * Add a "or having" clause to the query.
     *
     * @param string $column
     * @param string $operator
     * @param string $value
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orHaving($column, $operator = null, $value = null){
        return \Illuminate\Database\Query\Builder::orHaving($column, $operator, $value);
    }

    /**
     * Add a raw having clause to the query.
     *
     * @param string $sql
     * @param array $bindings
     * @param string $boolean
     * @return $this
     * @static
     */
    public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
        return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
    }

    /**
     * Add a raw or having clause to the query.
     *
     * @param string $sql
     * @param array $bindings
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function orHavingRaw($sql, $bindings = array()){
        return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
    }

    /**
     * Add an "order by" clause to the query.
     *
     * @param string $column
     * @param string $direction
     * @return $this
     * @static
     */
    public static function orderBy($column, $direction = 'asc'){
        return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
    }

    /**
     * Add an "order by" clause for a timestamp to the query.
     *
     * @param string $column
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function latest($column = 'created_at'){
        return \Illuminate\Database\Query\Builder::latest($column);
    }

    /**
     * Add an "order by" clause for a timestamp to the query.
     *
     * @param string $column
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function oldest($column = 'created_at'){
        return \Illuminate\Database\Query\Builder::oldest($column);
    }

    /**
     * Put the query's results in random order.
     *
     * @param string $seed
     * @return $this
     * @static
     */
    public static function inRandomOrder($seed = ''){
        return \Illuminate\Database\Query\Builder::inRandomOrder($seed);
    }

    /**
     * Add a raw "order by" clause to the query.
     *
     * @param string $sql
     * @param array $bindings
     * @return $this
     * @static
     */
    public static function orderByRaw($sql, $bindings = array()){
        return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
    }

    /**
     * Set the "offset" value of the query.
     *
     * @param int $value
     * @return $this
     * @static
     */
    public static function offset($value){
        return \Illuminate\Database\Query\Builder::offset($value);
    }

    /**
     * Alias to set the "offset" value of the query.
     *
     * @param int $value
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function skip($value){
        return \Illuminate\Database\Query\Builder::skip($value);
    }

    /**
     * Set the "limit" value of the query.
     *
     * @param int $value
     * @return $this
     * @static
     */
    public static function limit($value){
        return \Illuminate\Database\Query\Builder::limit($value);
    }

    /**
     * Alias to set the "limit" value of the query.
     *
     * @param int $value
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function take($value){
        return \Illuminate\Database\Query\Builder::take($value);
    }

    /**
     * Set the limit and offset for a given page.
     *
     * @param int $page
     * @param int $perPage
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function forPage($page, $perPage = 15){
        return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
    }

    /**
     * Constrain the query to the next "page" of results after a given ID.
     *
     * @param int $perPage
     * @param int $lastId
     * @param string $column
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id'){
        return \Illuminate\Database\Query\Builder::forPageAfterId($perPage, $lastId, $column);
    }

    /**
     * Add a union statement to the query.
     *
     * @param \Illuminate\Database\Query\Builder|\Closure $query
     * @param bool $all
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function union($query, $all = false){
        return \Illuminate\Database\Query\Builder::union($query, $all);
    }

    /**
     * Add a union all statement to the query.
     *
     * @param \Illuminate\Database\Query\Builder|\Closure $query
     * @return \Illuminate\Database\Query\Builder|static
     * @static
     */
    public static function unionAll($query){
        return \Illuminate\Database\Query\Builder::unionAll($query);
    }

    /**
     * Lock the selected rows in the table.
     *
     * @param bool $value
     * @return $this
     * @static
     */
    public static function lock($value = true){
        return \Illuminate\Database\Query\Builder::lock($value);
    }

    /**
     * Lock the selected rows in the table for updating.
     *
     * @return \Illuminate\Database\Query\Builder
     * @static
     */
    public static function lockForUpdate(){
        return \Illuminate\Database\Query\Builder::lockForUpdate();
    }

    /**
     * Share lock the selected rows in the table.
     *
     * @return \Illuminate\Database\Query\Builder
     * @static
     */
    public static function sharedLock(){
        return \Illuminate\Database\Query\Builder::sharedLock();
    }

    /**
     * Get the SQL representation of the query.
     *
     * @return string
     * @static
     */
    public static function toSql(){
        return \Illuminate\Database\Query\Builder::toSql();
    }

    /**
     * Get the count of the total records for the paginator.
     *
     * @param array $columns
     * @return int
     * @static
     */
    public static function getCountForPagination($columns = array()){
        return \Illuminate\Database\Query\Builder::getCountForPagination($columns);
    }

    /**
     * Concatenate values of a given column as a string.
     *
     * @param string $column
     * @param string $glue
     * @return string
     * @static
     */
    public static function implode($column, $glue = ''){
        return \Illuminate\Database\Query\Builder::implode($column, $glue);
    }

    /**
     * Determine if any rows exist for the current query.
     *
     * @return bool
     * @static
     */
    public static function exists(){
        return \Illuminate\Database\Query\Builder::exists();
    }

    /**
     * Retrieve the "count" result of the query.
     *
     * @param string $columns
     * @return int
     * @static
     */
    public static function count($columns = '*'){
        return \Illuminate\Database\Query\Builder::count($columns);
    }

    /**
     * Retrieve the minimum value of a given column.
     *
     * @param string $column
     * @return float|int
     * @static
     */
    public static function min($column){
        return \Illuminate\Database\Query\Builder::min($column);
    }

    /**
     * Retrieve the maximum value of a given column.
     *
     * @param string $column
     * @return float|int
     * @static
     */
    public static function max($column){
        return \Illuminate\Database\Query\Builder::max($column);
    }

    /**
     * Retrieve the sum of the values of a given column.
     *
     * @param string $column
     * @return float|int
     * @static
     */
    public static function sum($column){
        return \Illuminate\Database\Query\Builder::sum($column);
    }

    /**
     * Retrieve the average of the values of a given column.
     *
     * @param string $column
     * @return float|int
     * @static
     */
    public static function avg($column){
        return \Illuminate\Database\Query\Builder::avg($column);
    }

    /**
     * Alias for the "avg" method.
     *
     * @param string $column
     * @return float|int
     * @static
     */
    public static function average($column){
        return \Illuminate\Database\Query\Builder::average($column);
    }

    /**
     * Execute an aggregate function on the database.
     *
     * @param string $function
     * @param array $columns
     * @return float|int
     * @static
     */
    public static function aggregate($function, $columns = array()){
        return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
    }

    /**
     * Insert a new record into the database.
     *
     * @param array $values
     * @return bool
     * @static
     */
    public static function insert($values){
        return \Illuminate\Database\Query\Builder::insert($values);
    }

    /**
     * Insert a new record and get the value of the primary key.
     *
     * @param array $values
     * @param string $sequence
     * @return int
     * @static
     */
    public static function insertGetId($values, $sequence = null){
        return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
    }

    /**
     * Insert or update a record matching the attributes, and fill it with values.
     *
     * @param array $attributes
     * @param array $values
     * @return bool
     * @static
     */
    public static function updateOrInsert($attributes, $values = array()){
        return \Illuminate\Database\Query\Builder::updateOrInsert($attributes, $values);
    }

    /**
     * Run a truncate statement on the table.
     *
     * @return void
     * @static
     */
    public static function truncate(){
        \Illuminate\Database\Query\Builder::truncate();
    }

    /**
     * Merge an array of where clauses and bindings.
     *
     * @param array $wheres
     * @param array $bindings
     * @return void
     * @static
     */
    public static function mergeWheres($wheres, $bindings){
        \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
    }

    /**
     * Create a raw database expression.
     *
     * @param mixed $value
     * @return \Illuminate\Database\Query\Expression
     * @static
     */
    public static function raw($value){
        return \Illuminate\Database\Query\Builder::raw($value);
    }

    /**
     * Get the current query value bindings in a flattened array.
     *
     * @return array
     * @static
     */
    public static function getBindings(){
        return \Illuminate\Database\Query\Builder::getBindings();
    }

    /**
     * Get the raw array of bindings.
     *
     * @return array
     * @static
     */
    public static function getRawBindings(){
        return \Illuminate\Database\Query\Builder::getRawBindings();
    }

    /**
     * Set the bindings on the query builder.
     *
     * @param array $bindings
     * @param string $type
     * @return $this
     * @throws \InvalidArgumentException
     * @static
     */
    public static function setBindings($bindings, $type = 'where'){
        return \Illuminate\Database\Query\Builder::setBindings($bindings, $type);
    }

    /**
     * Add a binding to the query.
     *
     * @param mixed $value
     * @param string $type
     * @return $this
     * @throws \InvalidArgumentException
     * @static
     */
    public static function addBinding($value, $type = 'where'){
        return \Illuminate\Database\Query\Builder::addBinding($value, $type);
    }

    /**
     * Merge an array of bindings into our bindings.
     *
     * @param \Illuminate\Database\Query\Builder $query
     * @return $this
     * @static
     */
    public static function mergeBindings($query){
        return \Illuminate\Database\Query\Builder::mergeBindings($query);
    }

    /**
     * Get the database query processor instance.
     *
     * @return \Illuminate\Database\Query\Processors\Processor
     * @static
     */
    public static function getProcessor(){
        return \Illuminate\Database\Query\Builder::getProcessor();
    }

    /**
     * Get the query grammar instance.
     *
     * @return \Illuminate\Database\Query\Grammars\Grammar
     * @static
     */
    public static function getGrammar(){
        return \Illuminate\Database\Query\Builder::getGrammar();
    }

    /**
     * Use the write pdo for query.
     *
     * @return $this
     * @static
     */
    public static function useWritePdo(){
        return \Illuminate\Database\Query\Builder::useWritePdo();
    }

    /**
     * Checks if macro is registered.
     *
     * @param string $name
     * @return bool
     * @static
     */
    public static function hasMacro($name){
        return \Illuminate\Database\Query\Builder::hasMacro($name);
    }

    /**
     * Dynamically handle calls to the class.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     * @throws \BadMethodCallException
     * @static
     */
    public static function macroCall($method, $parameters){
        return \Illuminate\Database\Query\Builder::macroCall($method, $parameters);
    }

}
