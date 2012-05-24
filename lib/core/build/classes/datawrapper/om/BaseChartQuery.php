<?php


/**
 * Base class that represents a query for the 'chart' table.
 *
 * 
 *
 * @method     ChartQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChartQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     ChartQuery orderByTheme($order = Criteria::ASC) Order by the theme column
 * @method     ChartQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChartQuery orderByLastModifiedAt($order = Criteria::ASC) Order by the last_modified_at column
 * @method     ChartQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     ChartQuery orderByMetadata($order = Criteria::ASC) Order by the metadata column
 * @method     ChartQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method     ChartQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method     ChartQuery orderByAuthorId($order = Criteria::ASC) Order by the author_id column
 * @method     ChartQuery orderByShowInGallery($order = Criteria::ASC) Order by the show_in_gallery column
 *
 * @method     ChartQuery groupById() Group by the id column
 * @method     ChartQuery groupByTitle() Group by the title column
 * @method     ChartQuery groupByTheme() Group by the theme column
 * @method     ChartQuery groupByCreatedAt() Group by the created_at column
 * @method     ChartQuery groupByLastModifiedAt() Group by the last_modified_at column
 * @method     ChartQuery groupByType() Group by the type column
 * @method     ChartQuery groupByMetadata() Group by the metadata column
 * @method     ChartQuery groupByDeleted() Group by the deleted column
 * @method     ChartQuery groupByDeletedAt() Group by the deleted_at column
 * @method     ChartQuery groupByAuthorId() Group by the author_id column
 * @method     ChartQuery groupByShowInGallery() Group by the show_in_gallery column
 *
 * @method     ChartQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChartQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChartQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChartQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     ChartQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     ChartQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     Chart findOne(PropelPDO $con = null) Return the first Chart matching the query
 * @method     Chart findOneOrCreate(PropelPDO $con = null) Return the first Chart matching the query, or a new Chart object populated from the query conditions when no match is found
 *
 * @method     Chart findOneById(string $id) Return the first Chart filtered by the id column
 * @method     Chart findOneByTitle(string $title) Return the first Chart filtered by the title column
 * @method     Chart findOneByTheme(string $theme) Return the first Chart filtered by the theme column
 * @method     Chart findOneByCreatedAt(string $created_at) Return the first Chart filtered by the created_at column
 * @method     Chart findOneByLastModifiedAt(string $last_modified_at) Return the first Chart filtered by the last_modified_at column
 * @method     Chart findOneByType(string $type) Return the first Chart filtered by the type column
 * @method     Chart findOneByMetadata(string $metadata) Return the first Chart filtered by the metadata column
 * @method     Chart findOneByDeleted(boolean $deleted) Return the first Chart filtered by the deleted column
 * @method     Chart findOneByDeletedAt(string $deleted_at) Return the first Chart filtered by the deleted_at column
 * @method     Chart findOneByAuthorId(int $author_id) Return the first Chart filtered by the author_id column
 * @method     Chart findOneByShowInGallery(boolean $show_in_gallery) Return the first Chart filtered by the show_in_gallery column
 *
 * @method     array findById(string $id) Return Chart objects filtered by the id column
 * @method     array findByTitle(string $title) Return Chart objects filtered by the title column
 * @method     array findByTheme(string $theme) Return Chart objects filtered by the theme column
 * @method     array findByCreatedAt(string $created_at) Return Chart objects filtered by the created_at column
 * @method     array findByLastModifiedAt(string $last_modified_at) Return Chart objects filtered by the last_modified_at column
 * @method     array findByType(string $type) Return Chart objects filtered by the type column
 * @method     array findByMetadata(string $metadata) Return Chart objects filtered by the metadata column
 * @method     array findByDeleted(boolean $deleted) Return Chart objects filtered by the deleted column
 * @method     array findByDeletedAt(string $deleted_at) Return Chart objects filtered by the deleted_at column
 * @method     array findByAuthorId(int $author_id) Return Chart objects filtered by the author_id column
 * @method     array findByShowInGallery(boolean $show_in_gallery) Return Chart objects filtered by the show_in_gallery column
 *
 * @package    propel.generator.datawrapper.om
 */
abstract class BaseChartQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseChartQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'datawrapper', $modelName = 'Chart', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ChartQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ChartQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ChartQuery) {
			return $criteria;
		}
		$query = new ChartQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Chart|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = ChartPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(ChartPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Chart A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `TITLE`, `THEME`, `CREATED_AT`, `LAST_MODIFIED_AT`, `TYPE`, `METADATA`, `DELETED`, `DELETED_AT`, `AUTHOR_ID`, `SHOW_IN_GALLERY` FROM `chart` WHERE `ID` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_STR);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Chart();
			$obj->hydrate($row);
			ChartPeer::addInstanceToPool($obj, (string) $key);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Chart|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ChartPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ChartPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterById('fooValue');   // WHERE id = 'fooValue'
	 * $query->filterById('%fooValue%'); // WHERE id LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $id The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($id)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $id)) {
				$id = str_replace('*', '%', $id);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ChartPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the title column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
	 * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $title The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ChartPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the theme column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTheme('fooValue');   // WHERE theme = 'fooValue'
	 * $query->filterByTheme('%fooValue%'); // WHERE theme LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $theme The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByTheme($theme = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($theme)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $theme)) {
				$theme = str_replace('*', '%', $theme);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ChartPeer::THEME, $theme, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
	 * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
	 * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $createdAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(ChartPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(ChartPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ChartPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query on the last_modified_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLastModifiedAt('2011-03-14'); // WHERE last_modified_at = '2011-03-14'
	 * $query->filterByLastModifiedAt('now'); // WHERE last_modified_at = '2011-03-14'
	 * $query->filterByLastModifiedAt(array('max' => 'yesterday')); // WHERE last_modified_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $lastModifiedAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByLastModifiedAt($lastModifiedAt = null, $comparison = null)
	{
		if (is_array($lastModifiedAt)) {
			$useMinMax = false;
			if (isset($lastModifiedAt['min'])) {
				$this->addUsingAlias(ChartPeer::LAST_MODIFIED_AT, $lastModifiedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastModifiedAt['max'])) {
				$this->addUsingAlias(ChartPeer::LAST_MODIFIED_AT, $lastModifiedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ChartPeer::LAST_MODIFIED_AT, $lastModifiedAt, $comparison);
	}

	/**
	 * Filter the query on the type column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
	 * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $type The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($type)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $type)) {
				$type = str_replace('*', '%', $type);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ChartPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the metadata column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMetadata('fooValue');   // WHERE metadata = 'fooValue'
	 * $query->filterByMetadata('%fooValue%'); // WHERE metadata LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $metadata The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByMetadata($metadata = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($metadata)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $metadata)) {
				$metadata = str_replace('*', '%', $metadata);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ChartPeer::METADATA, $metadata, $comparison);
	}

	/**
	 * Filter the query on the deleted column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDeleted(true); // WHERE deleted = true
	 * $query->filterByDeleted('yes'); // WHERE deleted = true
	 * </code>
	 *
	 * @param     boolean|string $deleted The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByDeleted($deleted = null, $comparison = null)
	{
		if (is_string($deleted)) {
			$deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(ChartPeer::DELETED, $deleted, $comparison);
	}

	/**
	 * Filter the query on the deleted_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDeletedAt('2011-03-14'); // WHERE deleted_at = '2011-03-14'
	 * $query->filterByDeletedAt('now'); // WHERE deleted_at = '2011-03-14'
	 * $query->filterByDeletedAt(array('max' => 'yesterday')); // WHERE deleted_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $deletedAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByDeletedAt($deletedAt = null, $comparison = null)
	{
		if (is_array($deletedAt)) {
			$useMinMax = false;
			if (isset($deletedAt['min'])) {
				$this->addUsingAlias(ChartPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deletedAt['max'])) {
				$this->addUsingAlias(ChartPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ChartPeer::DELETED_AT, $deletedAt, $comparison);
	}

	/**
	 * Filter the query on the author_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAuthorId(1234); // WHERE author_id = 1234
	 * $query->filterByAuthorId(array(12, 34)); // WHERE author_id IN (12, 34)
	 * $query->filterByAuthorId(array('min' => 12)); // WHERE author_id > 12
	 * </code>
	 *
	 * @see       filterByUser()
	 *
	 * @param     mixed $authorId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByAuthorId($authorId = null, $comparison = null)
	{
		if (is_array($authorId)) {
			$useMinMax = false;
			if (isset($authorId['min'])) {
				$this->addUsingAlias(ChartPeer::AUTHOR_ID, $authorId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($authorId['max'])) {
				$this->addUsingAlias(ChartPeer::AUTHOR_ID, $authorId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ChartPeer::AUTHOR_ID, $authorId, $comparison);
	}

	/**
	 * Filter the query on the show_in_gallery column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByShowInGallery(true); // WHERE show_in_gallery = true
	 * $query->filterByShowInGallery('yes'); // WHERE show_in_gallery = true
	 * </code>
	 *
	 * @param     boolean|string $showInGallery The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByShowInGallery($showInGallery = null, $comparison = null)
	{
		if (is_string($showInGallery)) {
			$show_in_gallery = in_array(strtolower($showInGallery), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(ChartPeer::SHOW_IN_GALLERY, $showInGallery, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User|PropelCollection $user The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		if ($user instanceof User) {
			return $this
				->addUsingAlias(ChartPeer::AUTHOR_ID, $user->getId(), $comparison);
		} elseif ($user instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(ChartPeer::AUTHOR_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('User');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'User');
		}

		return $this;
	}

	/**
	 * Use the User relation User object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Chart $chart Object to remove from the list of results
	 *
	 * @return    ChartQuery The current query, for fluid interface
	 */
	public function prune($chart = null)
	{
		if ($chart) {
			$this->addUsingAlias(ChartPeer::ID, $chart->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseChartQuery