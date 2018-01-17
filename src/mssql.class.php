<?php
/**
 * Yadal interface for the MSSQL (Microsoft SQL Server) Database type
 *
 * @package Yadal
 */
/**
 * class MSSQL
 *
 * Yadal - Yet Another Database Abstraction Layer
 * Microsoft SQL Server (MSSQL) class
 *
 * @author Teye Heimans
 * @package Yadal
 */
class MSSQL extends Yadal
{
    /**
     * MSSQL::MSSQL()
     *
     * Constructor
     *
     * @author Teye Heimans
     */
    function __construct( $db )
    {
        parent::__construct( $db );
        $this->_nameQuote = array('[',']');
    }
    /**
     * MSSQL::connect()
     *
     * Make a connection with the database and
     * select the database.
     *
     * @param string $servername: the server to connect to
     * @param string $username: the username which should be used to login
     * @param string $password: the password which should be used to login
     * @return resource: The connection resource or false on failure
     * @access public
     * @author Teye Heimans
     */
    function connect( $servername = '', $username = '', $password = '' )
    {
        // try to connect
        $connectionInfo = array( 'Database' => $this->_db, 'UID' => $username, 'PWD' => $password  );
    	$this->_conn = sqlsrv_connect( $servername, $connectionInfo );
        
        return $this->_conn;
    }
    /**
     * MSSQL::close()
     *
     * Close the connection
     *
     * @return bool
     * @access public
     * @author Teye Heimans
     */
    function close()
    {
        if( $this->_isConnected )
        {
            $this->_isConnected = false;
            return sqlsrv_close( $this->_conn );
        }
    }
    /**
     * MSSQL::query()
     *
     * Execute the query
     *
     * @param string $query: the query
     * @return resource
     * @access public
     * @author Teye Heimans
     */
    function query( $query )
    {
    	$this->_lastQuery = $query;
    	// execute the query
        $sql = sqlsrv_query( $this->_conn, $query );
        return $sql;
    }
    /**
     * MSSQL::result()
     *
     * Return a specific result of a sql resource
     *
     * @param resource $result: The sql result where you want to get a result from
     * @param int $row: The row where you want a result from
     * @param string $field: The field which result you want
     * @return string
     * @access public
     * @author Teye Heimans
     */
    function result( $sql, $row = 0, $field = null )
    {
        $result = $this->getRecord( $sql, $row );
        if ( isset( $result[$field] ) ) {
            return $result[$field];
        } else return false;
    }
    /**
     * MSSQL::getInsertId()
     *
     * Get the id of the last inserted record
     *
     * @param string $table: the table which last inserted id should be returned from
     * @return int
     * @access public
     * @author Teye Heimans
     */
    function getInsertId( $table )
    {
    	$sql = sqlsrv_query( $this->_conn, "SELECT IDENT_CURRENT('".$table."')" );
    	if( $sql )
    	{
    		list($id) = sqlsrv_fetch_array($sql, SQLSRV_FETCH_NUMERIC);
       		return $id;
    	}
    	else
    	{
    		trigger_error(
    		  "Could not fetch the last inserted id for the table '".$table."'.\n".
    		  "Query: ".$this->getLastQuery()."\n".
    		  "Error: ".$this->getError(),
    		  E_USER_WARNING
    		);
    		return false;
    	}
    }
    /**
     * MSSQL::getError()
     *
     * Return the last error
     *
     * @return string
     * @access public
     * @author Teye Heimans
     */
    function getError()
    {
    	$error = mssql_get_last_message();
		if ($error == NULL)
		{
			$error = "General Error (The MS-SQL interface did not return a detailed error message).";
		}
        return '[' . $error['code'] . '] ' . $error['message'];
    }
    /**
     * MSSQL::recordCount()
     *
     * Return the number of records found by the query
     *
     * @param resource $sql: the sql resource which we should count
     * @return int
     * @access public
     * @author Teye Heimans
     */
    function recordCount( $sql)
    {
        return sqlsrv_num_rows( $sql );
    }
    /**
     * MSSQL::getRecord()
     *
     * Fetch a record in assoc mode and return it
     *
     * @return assoc array or false when there are no records left
     * @access public
     * @author Teye Heimans
     */
    function getRecord( $sql, $row = NULL )
    {
        if ( $row == NULL ) {
            return sqlsrv_fetch_array( $sql, SQLSRV_FETCH_ASSOC );
        } else {
            return sqlsrv_fetch_array( $sql, SQLSRV_FETCH_ASSOC, $row );
        }
    }
    /**
     * MSSQL::getFieldNames()
     *
     * Return the field names of the table
     *
     * @param string $table: if a table is given, this one is used. otherwise the default is used
     * @return array
     * @access public
     * @author Teye Heimans
     */
    function getFieldNames( $table )
    {
        $t = strtolower($table);
        // return the data from the cache if it exists
        if( isset( $this->_cache['fields'][$t] ) )
        {
            return $this->_cache['fields'][$t];
        }
        // get the field names
    	$sql = $this->query("
    	  SELECT column_name fld
    	  FROM information_schema.columns
          WHERE table_name = '".$table."'
          ORDER BY ordinal_position"
    	);
    	// query failed ?
		if( ! $sql )
		{
			trigger_error(
    		  "Could not fetch fieldnames of the table '".$table."'.\n".
    		  "Query: ".$this->getLastQuery()."\n".
    		  "Error: ".$this->getError(),
    		  E_USER_WARNING
    		);
    		return false;
		}
		// save the fields in an array and return it
		$result = array();
		while ( $row = $this->getRecord( $sql) )
		{
			$result[] = $row['fld'];
		}
		sqlsrv_free_stmt($sql);
		// save the result in the cache
        $this->_cache['fields'][$t] = $result;
		return $result;
    }
    /**
     * MSSQL::getTables()
     *
     * Return the tables from the database
     *
     * @param bool $showViews: should we also return the views ? (default true )
     * @return array
     * @access public
     * @author Teye Heimans
     */
    function getTables($showViews = true)
    {
        // return the data from the cache if it exists
        if( isset( $this->_cache['tables'] ) )
        {
            return $this->_cache['tables'];
        }
        $sql = $this->query("
          SELECT name
          FROM sysobjects
          WHERE type='U' ".($showViews ? " OR type='V' ":"")." AND
          (name not in
            ('sysallocations','syscolumns','syscomments','sysdepends',
             'sysfilegroups','sysfiles','sysfiles1','sysforeignkeys','dtproperties',
             'sysfulltextcatalogs','sysindexes','sysindexkeys','sysmembers',
             'sysobjects','syspermissions','sysprotects','sysreferences',
             'systypes','sysusers','sysalternates','sysconstraints',
             'syssegments','REFERENTIAL_CONSTRAINTS','CHECK_CONSTRAINTS',
             'CONSTRAINT_TABLE_USAGE','CONSTRAINT_COLUMN_USAGE','VIEWS',
             'VIEW_TABLE_USAGE','VIEW_COLUMN_USAGE','SCHEMATA','TABLES',
             'TABLE_CONSTRAINTS','TABLE_PRIVILEGES','COLUMNS',
             'COLUMN_DOMAIN_USAGE','COLUMN_PRIVILEGES','DOMAINS',
             'DOMAIN_CONSTRAINTS','KEY_COLUMN_USAGE'))"
        );
        // query failed ?
        if( !$sql )
        {
            trigger_error(
    		  "Could not retrieve the tables from the database!\n".
    		  "Query: ".$this->getLastQuery()."\n".
    		  "Error: ".$this->getError(),
    		  E_USER_WARNING
    		);
    		return false;
        }
        // save the table names in an array and return them
        $result = array();
        $num = $this->recordCount( $sql );
        for( $i = 0; $i < $num; $i++ )
        {
            $result[] = $this->result( $sql, $i);
        }
        // save the result in the cache
    	$this->_cache['tables'] = $result;
        return $result;
    }
    /**
     * MSSQL::getNotNullFields()
     *
     * Retrieve the fields that can not contain NULL
     *
     * @param string $table: The table which fields we should retrieve
     * @return array
     * @access public
     * @author Teye Heimans
     */
    function getNotNullFields ( $table )
    {
        $t = strtolower($table);
        // return the data from the cache if it exists
        if( isset( $this->_cache['notnull'][$t] ) )
        {
            return $this->_cache['notnull'][$t];
        }
    	// get the not null fields
    	$sql = $this->query("
    	  SELECT
    	    column_name fld
    	  FROM
    	    information_schema.columns
          WHERE
            table_name = '".$table."' AND
            is_nullable = 'No'"
    	);
    	// query failed ?
		if( ! $sql )
		{
			trigger_error(
    		  "Could not fetch the not nullable fields of the table '".$table."'.\n".
    		  "Query: ".$this->getLastQuery()."\n".
    		  "Error: ".$this->getError(),
    		  E_USER_WARNING
    		);
    		return false;
		}
		// save the fields in an array and return it
		$result = array();
		while ( $row = $this->getRecord( $sql) )
		{
			$result[] = $row['fld'];
		}
		sqlsrv_free_stmt($sql);
		// save the result in the cache
    	$this->_cache['notnull'][$t] = $result;
		return $result;
    }
    /**
     * MSSQL::getFieldTypes()
     *
     * Retrieve the field types of the given table
     *
     * @param string $table: The table where we should fetch the fields and their types from
     * @return array
     * @access public
     * @author Teye Heimans
     */
    function getFieldTypes( $table )
    {
        $t = strtolower($table);
        // return the data from the cache if it exists
        if( isset( $this->_cache['fieldtypes'][$t] ) )
        {
            return $this->_cache['fieldtypes'][$t];
        }
        // get the meta data
        $sql = $this->query("
          SELECT
            c.name fld,
            t.name type,
            c.length
          FROM syscolumns c
          JOIN systypes t ON t.xusertype = c.xusertype
          JOIN sysobjects o ON o.id = c.id
          WHERE o.name='".$table."'"
        );
        // query failed ?
        if( !$sql )
        {
            trigger_error(
    		  "Could not fetch the meta data of the columns for table '".$table."'.\n".
    		  "Query: ".$this->getLastQuery()."\n".
    		  "Error: ".$this->getError(),
    		  E_USER_WARNING
    		);
    		return false;
        }
        // save the result in an array
        // TODO: load the default values in the 3rd place in the array
        $result = array();
        while( $row = $this->getRecord( $sql ) )
        {
            $result[ $row['fld'] ] = array(
              $row['type'],
              $row['length'],
              null // default value
            );
        }
        // save the result in the cache
    	$this->_cache['fieldtypes'][$t] = $result;
		return $result;
    }
    /**
     * MSSQL::escapeString()
     *
     * Escape the string we are going to save from dangerous characters
     *
     * @param string $string
     * @return string
     * @access public
     * @author Teye Heimans
     */
    function escapeString( $string )
    {
        return preg_replace("'","''",$string);
    }
    /**
     * MSSQL::getPrKeys()
     *
     * Fetch the keys from the table
     *
     * @param string $table: the table where we should fetch the keys from
     * @return array of the keys which are found
     * @access public
     * @author Teye Heimans
     */
    function getPrKeys( $table )
    {
        $t = strtolower($table);
        // return the data from the cache if it exists
        if( isset( $this->_cache['keys'][$t] ) )
        {
            return $this->_cache['keys'][$t];
        }
    	// get the primary keys
		$sql = $this->query("
		  SELECT
		    k.column_name fld
		  FROM
		    information_schema.key_column_usage k,
		    information_schema.table_constraints tc
		  WHERE
		    tc.constraint_name = k.constraint_name AND
		    tc.constraint_type = 'PRIMARY KEY' AND
		    k.table_name = '".$table."'"
		);
		// query failed ?
		if( ! $sql )
		{
			trigger_error(
    		  "Could not fetch the primary keys for the table '".$table."'.\n".
    		  "Query: ".$this->getLastQuery()."\n".
    		  "Error: ".$this->getError(),
    		  E_USER_WARNING
    		);
    		return false;
		}
		// get the fields, put them into an array and return them
		$result = array();
		while( $row = $this->getRecord( $sql ) )
		{
			$result[] = $row['fld'];
		}
		sqlsrv_free_stmt($sql);
		// save the result in the cache
        $this->_cache['keys'][$t] = $result;
		return $result;
    }
    /**
     * MSSQL::getUniqueFields()
     *
     * Fetch the unique fields from the table
     *
     * @param string $table: the table where we should fetch the unique fields from
     * @return array of the keys which are found
     * @access public
     * @author Teye Heimans
     */
    function getUniqueFields( $table )
    {
        $t = strtolower( $table );
        // return the data from the cache if it exists
        if( isset( $this->_cache['unique'][$t] ) )
        {
            return $this->_cache['unique'][$t];
        }
        // fetch the unique fields
    	$sql = $this->query("
          SELECT
            t1.constraint_name con,
            t2.column_name fld
		  FROM
		    information_schema.table_constraints t1,
		    information_schema.constraint_column_usage t2
		  WHERE
		    t1.table_name = t2.table_name AND
		    t1.constraint_name = t2.constraint_name AND
		    (t1.constraint_type = 'UNIQUE' OR
		     t1.constraint_type = 'PRIMARY KEY') AND
		    t1.table_name = '".$table."'"
        );
        // query failed ?
		if( ! $sql )
		{
			trigger_error(
    		  "Could not fetch the unique fields for the table '".$table."'.\n".
    		  "Query: ".$this->getLastQuery()."\n".
    		  "Error: ".$this->getError(),
    		  E_USER_WARNING
    		);
    		return false;
		}
        // put the unique fields into an array and return them
        $result = array();
        while( $row = $this->getRecord( $sql ) )
        {
            $result[$row['con']][] = $row['fld'];
        }
        sqlsrv_free_stmt($sql);
        // save the result in the cache
        $this->_cache['unique'][$t] = $result;
        return $result;
    }
}
?>