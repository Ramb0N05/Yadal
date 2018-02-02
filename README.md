# Class Yadal - Documentation

## Table of Contents

* [Access](#access)
    * [__construct](#__construct)
    * [setConnectionResource](#setconnectionresource)
    * [isConnected](#isconnected)
    * [dbDate](#dbdate)
    * [array2case](#array2case)
    * [quoteNumbers](#quotenumbers)
    * [quote](#quote)
    * [clearCache](#clearcache)
    * [getLastQuery](#getlastquery)
    * [result](#result)
    * [getTables](#gettables)
    * [getFieldTypes](#getfieldtypes)
    * [connect](#connect)
    * [getNotNullFields](#getnotnullfields)
    * [getUniqueFields](#getuniquefields)
    * [getPrKeys](#getprkeys)
    * [recordCount](#recordcount)
    * [getFieldNames](#getfieldnames)
    * [escapeString](#escapestring)
    * [getRecord](#getrecord)
    * [getInsertId](#getinsertid)
    * [query](#query)
    * [close](#close)
    * [getError](#geterror)
    * [GetErrorNo](#geterrorno)
* [MSSQL](#mssql)
    * [__construct](#__construct-1)
    * [setConnectionResource](#setconnectionresource-1)
    * [isConnected](#isconnected-1)
    * [dbDate](#dbdate-1)
    * [array2case](#array2case-1)
    * [quoteNumbers](#quotenumbers-1)
    * [quote](#quote-1)
    * [clearCache](#clearcache-1)
    * [getLastQuery](#getlastquery-1)
    * [result](#result-1)
    * [getTables](#gettables-1)
    * [getFieldTypes](#getfieldtypes-1)
    * [connect](#connect-1)
    * [getNotNullFields](#getnotnullfields-1)
    * [getUniqueFields](#getuniquefields-1)
    * [getPrKeys](#getprkeys-1)
    * [recordCount](#recordcount-1)
    * [getFieldNames](#getfieldnames-1)
    * [escapeString](#escapestring-1)
    * [getRecord](#getrecord-1)
    * [getInsertId](#getinsertid-1)
    * [query](#query-1)
    * [close](#close-1)
    * [getError](#geterror-1)
    * [GetErrorNo](#geterrorno-1)
* [MySQL](#mysql)
    * [__construct](#__construct-2)
    * [setConnectionResource](#setconnectionresource-2)
    * [isConnected](#isconnected-2)
    * [dbDate](#dbdate-2)
    * [array2case](#array2case-2)
    * [quoteNumbers](#quotenumbers-2)
    * [quote](#quote-2)
    * [clearCache](#clearcache-2)
    * [getLastQuery](#getlastquery-2)
    * [result](#result-2)
    * [getTables](#gettables-2)
    * [getFieldTypes](#getfieldtypes-2)
    * [connect](#connect-2)
    * [getNotNullFields](#getnotnullfields-2)
    * [getUniqueFields](#getuniquefields-2)
    * [getPrKeys](#getprkeys-2)
    * [recordCount](#recordcount-2)
    * [getFieldNames](#getfieldnames-2)
    * [escapeString](#escapestring-2)
    * [getRecord](#getrecord-2)
    * [getInsertId](#getinsertid-2)
    * [query](#query-2)
    * [close](#close-2)
    * [getError](#geterror-2)
    * [GetErrorNo](#geterrorno-2)
    * [getErrorNo](#geterrorno-3)
* [ODBC](#odbc)
    * [__construct](#__construct-3)
    * [setConnectionResource](#setconnectionresource-3)
    * [isConnected](#isconnected-3)
    * [dbDate](#dbdate-3)
    * [array2case](#array2case-3)
    * [quoteNumbers](#quotenumbers-3)
    * [quote](#quote-3)
    * [clearCache](#clearcache-3)
    * [getLastQuery](#getlastquery-3)
    * [result](#result-3)
    * [getTables](#gettables-3)
    * [getFieldTypes](#getfieldtypes-3)
    * [connect](#connect-3)
    * [getNotNullFields](#getnotnullfields-3)
    * [getUniqueFields](#getuniquefields-3)
    * [getPrKeys](#getprkeys-3)
    * [recordCount](#recordcount-3)
    * [getFieldNames](#getfieldnames-3)
    * [escapeString](#escapestring-3)
    * [getRecord](#getrecord-3)
    * [getInsertId](#getinsertid-3)
    * [query](#query-3)
    * [close](#close-3)
    * [getError](#geterror-3)
    * [GetErrorNo](#geterrorno-4)
    * [fetchKeys](#fetchkeys)
    * [fetchUniqueFields](#fetchuniquefields)
* [PostgreSQL](#postgresql)
    * [__construct](#__construct-4)
    * [setConnectionResource](#setconnectionresource-4)
    * [isConnected](#isconnected-4)
    * [dbDate](#dbdate-4)
    * [array2case](#array2case-4)
    * [quoteNumbers](#quotenumbers-4)
    * [quote](#quote-4)
    * [clearCache](#clearcache-4)
    * [getLastQuery](#getlastquery-4)
    * [result](#result-4)
    * [getTables](#gettables-4)
    * [getFieldTypes](#getfieldtypes-4)
    * [connect](#connect-4)
    * [getNotNullFields](#getnotnullfields-4)
    * [getUniqueFields](#getuniquefields-4)
    * [getPrKeys](#getprkeys-4)
    * [recordCount](#recordcount-4)
    * [getFieldNames](#getfieldnames-4)
    * [escapeString](#escapestring-4)
    * [getRecord](#getrecord-4)
    * [getInsertId](#getinsertid-4)
    * [query](#query-4)
    * [close](#close-4)
    * [getError](#geterror-4)
    * [GetErrorNo](#geterrorno-5)
* [Yadal](#yadal)
    * [__construct](#__construct-5)
    * [setConnectionResource](#setconnectionresource-5)
    * [isConnected](#isconnected-5)
    * [dbDate](#dbdate-5)
    * [array2case](#array2case-5)
    * [quoteNumbers](#quotenumbers-5)
    * [quote](#quote-5)
    * [clearCache](#clearcache-5)
    * [getLastQuery](#getlastquery-5)
    * [result](#result-5)
    * [getTables](#gettables-5)
    * [getFieldTypes](#getfieldtypes-5)
    * [connect](#connect-5)
    * [getNotNullFields](#getnotnullfields-5)
    * [getUniqueFields](#getuniquefields-5)
    * [getPrKeys](#getprkeys-5)
    * [recordCount](#recordcount-5)
    * [getFieldNames](#getfieldnames-5)
    * [escapeString](#escapestring-5)
    * [getRecord](#getrecord-5)
    * [getInsertId](#getinsertid-5)
    * [query](#query-5)
    * [close](#close-5)
    * [getError](#geterror-5)
    * [GetErrorNo](#geterrorno-6)
* [YadalMySQLi](#yadalmysqli)
    * [__construct](#__construct-6)
    * [setConnectionResource](#setconnectionresource-6)
    * [isConnected](#isconnected-6)
    * [dbDate](#dbdate-6)
    * [array2case](#array2case-6)
    * [quoteNumbers](#quotenumbers-6)
    * [quote](#quote-6)
    * [clearCache](#clearcache-6)
    * [getLastQuery](#getlastquery-6)
    * [result](#result-6)
    * [getTables](#gettables-6)
    * [getFieldTypes](#getfieldtypes-6)
    * [connect](#connect-6)
    * [getNotNullFields](#getnotnullfields-6)
    * [getUniqueFields](#getuniquefields-6)
    * [getPrKeys](#getprkeys-6)
    * [recordCount](#recordcount-6)
    * [getFieldNames](#getfieldnames-6)
    * [escapeString](#escapestring-6)
    * [getRecord](#getrecord-6)
    * [getInsertId](#getinsertid-6)
    * [query](#query-6)
    * [close](#close-6)
    * [getError](#geterror-6)
    * [GetErrorNo](#geterrorno-7)
    * [getErrorNo](#geterrorno-8)
    * [mysqli_result](#mysqli_result)

## Access

class Yadal

Yadal - Yet Another Database Abstraction Layer
Abstract Database class

* Full name: \Access
* Parent class: \Yadal


### __construct

Access::__construct()

```php
Access::__construct( string $db ): void
```

Constructor


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$db` | **string** | The database to connect to |




---

### setConnectionResource

Yadal::setConnectionResource()

```php
Access::setConnectionResource( resource &$conn ): void
```

Instead of opening a new connection, set the
connection resource of the already opend connection


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conn` | **resource** | The connection resource |




---

### isConnected

Yadal::isConnected()

```php
Access::isConnected(  ): boolean
```

Return if we have a connection or not





---

### dbDate

Access::dbDate()

```php
Access::dbDate( string $y, string $m, string $d ): string
```

Convert the given date to the correct database format.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$y` | **string** | The year of the date which should be converteds |
| `$m` | **string** | The month of the date which should be converteds |
| `$d` | **string** | The day of the date which should be converteds |


**Return Value:**

the date in the correct format or null when the date could not be converted



---

### array2case

Yadal::array2case()

```php
Access::array2case( string $field, array $options, string $default = &#039;Unknown&#039; ): string
```

Change an array to a CASE statement which can be used in an query.
Example:
array2case( 'UserType', array( 1 => 'Admin', 2 => 'Moderator', 3 => 'User' ) );

Result:
CASE `UserType`
 WHEN 1 THEN 'Admin'
 WHEN 2 THEN 'Moderator'
 WHEN 3 THEN 'User'
 ELSE 'Unknown'
END


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **string** | The field which we should use in the case or if statement |
| `$options` | **array** | Array of options. The array key will be used as statement compare-item and the value will be used as value |
| `$default` | **string** | The default value if none of the array keys are matched. Default is "Unknown". If you dont want to have a default value, use false |




---

### quoteNumbers

Yadal::quoteNumbers()

```php
Access::quoteNumbers(  ): boolean
```

Do we have to quote numbers ?





---

### quote

Yadal::quote()

```php
Access::quote( string $name ): string
```

Return the table name or field name quoted (so that spaces can be used)


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The table or field name which should me quoted |




---

### clearCache

Yadal::clearCache()

```php
Access::clearCache(  ): void
```

Clears the cache of most functions, like getUniqueFields, getNotNullFields, etc.





---

### getLastQuery

Yadal::getLastQuery()

```php
Access::getLastQuery(  ): string
```

Return the last query which was executed





---

### result

Yadal::result()

```php
Access::result( resource $sql, integer $row, string $field = null ): string
```

Return a specific result of a sql resource


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The sql where you want to get a result from |
| `$row` | **integer** | The row where you want a result from |
| `$field` | **string** | The field which result you want |




---

### getTables



```php
Access::getTables(  )
```







---

### getFieldTypes

Access::getFieldTypes()

```php
Access::getFieldTypes( string $table ): array
```

Return the types of the fields retrieved from the given table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** |  |




---

### connect

Access::connect()

```php
Access::connect( string $connStr = &#039;&#039;, string $username = &#039;&#039;, string $password = &#039;&#039;, string $charset = &#039;65001&#039; ): resource
```

Make a connection with the database and
select the database.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$connStr` | **string** | Connection string data other then userid, password and datasource |
| `$username` | **string** | the username which should be used to login |
| `$password` | **string** | the password which should be used to login |
| `$charset` | **string** | the charset for the connection |


**Return Value:**

The connection resource or false on failure



---

### getNotNullFields

Access::getNotNullFields()

```php
Access::getNotNullFields( string $table ): array
```

Retrieve the fields that can not contain NULL


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table which fields we should retrieve |




---

### getUniqueFields

Access::getUniqueFields()

```php
Access::getUniqueFields( string $table ): array
```

fetch the unique fields from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table to fetch the unique fields from |




---

### getPrKeys

Access::getPrKeys()

```php
Access::getPrKeys( string $table ): array
```

Get the primary keys from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where we should fetch the primary keys from |


**Return Value:**

primary keys



---

### recordCount

Access::recordCount()

```php
Access::recordCount( \recordset $rs ): integer
```

Public: return the number of records found by the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rs` | **\recordset** | The recordset where the records should be counted from |




---

### getFieldNames

Access::getFieldNames()

```php
Access::getFieldNames( string $table ): array
```

retrieve the field names used in the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | table to retrieve the field names from |


**Return Value:**

of field names



---

### escapeString

Access::escapeString()

```php
Access::escapeString( string $string ): string
```

Escape the string we are going to save from dangerous characters


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




---

### getRecord

Access::getRecord()

```php
Access::getRecord( \recordset $rs ): array
```

Public: fetch a record in assoc mode and return it


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rs` | **\recordset** | $the recordset where we should get a record from |




---

### getInsertId

Access::getInsertId()

```php
Access::getInsertId( string $table ): integer
```

Get the id of the last inserted record. Because MS Access
can't fetch the last inserted id we just fetch the highest id


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | the table to fetch the last key from |




---

### query

Access::query()

```php
Access::query( string $query ): \record
```

Execute the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** | the query to execute |


**Return Value:**

set



---

### close

Access::close()

```php
Access::close(  ): boolean
```

Close the connection





---

### getError

Access::getError()

```php
Access::getError(  ): string
```

Return the last eror





---

### GetErrorNo



```php
Access::GetErrorNo(  )
```







---

## MSSQL

class MSSQL

Yadal - Yet Another Database Abstraction Layer
Microsoft SQL Server (MSSQL) class

* Full name: \MSSQL
* Parent class: \Yadal


### __construct

MSSQL::__construct()

```php
MSSQL::__construct( string $db )
```

Constructor


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$db` | **string** | The database which should be used |




---

### setConnectionResource

Yadal::setConnectionResource()

```php
MSSQL::setConnectionResource( resource &$conn ): void
```

Instead of opening a new connection, set the
connection resource of the already opend connection


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conn` | **resource** | The connection resource |




---

### isConnected

Yadal::isConnected()

```php
MSSQL::isConnected(  ): boolean
```

Return if we have a connection or not





---

### dbDate

Yadal::dbDate()

```php
MSSQL::dbDate( string $y, string $m, string $d ): string
```

Convert the given date to the correct database format.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$y` | **string** | The year of the date which should be converteds |
| `$m` | **string** | The month of the date which should be converteds |
| `$d` | **string** | The day of the date which should be converteds |


**Return Value:**

the date in the correct format or null when the date could not be converted



---

### array2case

Yadal::array2case()

```php
MSSQL::array2case( string $field, array $options, string $default = &#039;Unknown&#039; ): string
```

Change an array to a CASE statement which can be used in an query.
Example:
array2case( 'UserType', array( 1 => 'Admin', 2 => 'Moderator', 3 => 'User' ) );

Result:
CASE `UserType`
 WHEN 1 THEN 'Admin'
 WHEN 2 THEN 'Moderator'
 WHEN 3 THEN 'User'
 ELSE 'Unknown'
END


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **string** | The field which we should use in the case or if statement |
| `$options` | **array** | Array of options. The array key will be used as statement compare-item and the value will be used as value |
| `$default` | **string** | The default value if none of the array keys are matched. Default is "Unknown". If you dont want to have a default value, use false |




---

### quoteNumbers

Yadal::quoteNumbers()

```php
MSSQL::quoteNumbers(  ): boolean
```

Do we have to quote numbers ?





---

### quote

Yadal::quote()

```php
MSSQL::quote( string $name ): string
```

Return the table name or field name quoted (so that spaces can be used)


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The table or field name which should me quoted |




---

### clearCache

Yadal::clearCache()

```php
MSSQL::clearCache(  ): void
```

Clears the cache of most functions, like getUniqueFields, getNotNullFields, etc.





---

### getLastQuery

Yadal::getLastQuery()

```php
MSSQL::getLastQuery(  ): string
```

Return the last query which was executed





---

### result

MSSQL::result()

```php
MSSQL::result( resource $sql, integer $row, string $field = null ): string
```

Return a specific result of a sql resource


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The sql where you want to get a result from |
| `$row` | **integer** | The row where you want a result from |
| `$field` | **string** | The field which result you want |




---

### getTables

MSSQL::getTables()

```php
MSSQL::getTables( boolean $showViews = true ): array
```

Return the tables from the database


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$showViews` | **boolean** | should we also return the views ? (default true ) |




---

### getFieldTypes

MSSQL::getFieldTypes()

```php
MSSQL::getFieldTypes( string $table ): array
```

Retrieve the field types of the given table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where we should fetch the fields and their types from |




---

### connect

MSSQL::connect()

```php
MSSQL::connect( string $servername = &#039;&#039;, string $username = &#039;&#039;, string $password = &#039;&#039;, string $charset = &#039;UTF-8&#039; ): resource
```

Make a connection with the database and
select the database.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$servername` | **string** | the server to connect to |
| `$username` | **string** | the username which should be used to login |
| `$password` | **string** | the password which should be used to login |
| `$charset` | **string** | the charset for the connection |


**Return Value:**

The connection resource or false on failure



---

### getNotNullFields

MSSQL::getNotNullFields()

```php
MSSQL::getNotNullFields( string $table ): array
```

Retrieve the fields that can not contain NULL


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table which fields we should retrieve |




---

### getUniqueFields

MSSQL::getUniqueFields()

```php
MSSQL::getUniqueFields( string $table ): array
```

Fetch the unique fields from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | the table where we should fetch the unique fields from |


**Return Value:**

of the keys which are found



---

### getPrKeys

MSSQL::getPrKeys()

```php
MSSQL::getPrKeys( string $table ): array
```

Fetch the keys from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | the table where we should fetch the keys from |


**Return Value:**

of the keys which are found



---

### recordCount

MSSQL::recordCount()

```php
MSSQL::recordCount( resource $sql ): integer
```

Return the number of records found by the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | the sql resource which we should count |




---

### getFieldNames

MSSQL::getFieldNames()

```php
MSSQL::getFieldNames( string $table ): array
```

Return the field names of the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | if a table is given, this one is used. otherwise the default is used |




---

### escapeString

MSSQL::escapeString()

```php
MSSQL::escapeString( string $string ): string
```

Escape the string we are going to save from dangerous characters


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




---

### getRecord

MSSQL::getRecord()

```php
MSSQL::getRecord(  $sql,  $row = NULL,  $mode = SQLSRV_FETCH_ASSOC ): \assoc
```

Fetch a record in assoc mode and return it


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **** |  |
| `$row` | **** |  |
| `$mode` | **** |  |


**Return Value:**

array or false when there are no records left



---

### getInsertId

MSSQL::getInsertId()

```php
MSSQL::getInsertId( string $table ): integer
```

Get the id of the last inserted record


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | the table which last inserted id should be returned from |




---

### query

MSSQL::query()

```php
MSSQL::query( string $query ): resource
```

Execute the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** | the query |




---

### close

MSSQL::close()

```php
MSSQL::close(  ): boolean
```

Close the connection





---

### getError

MSSQL::getError()

```php
MSSQL::getError(  ): string
```

Return the last error





---

### GetErrorNo



```php
MSSQL::GetErrorNo(  )
```







---

## MySQL

class MySQL

Yadal - Yet Another Database Abstraction Layer
MySQL class

* Full name: \MySQL
* Parent class: \Yadal


### __construct

MySQL::__construct()

```php
MySQL::__construct( string $db )
```

Constructor: set the database we should be using


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$db` | **string** | The database which should be used |




---

### setConnectionResource

Yadal::setConnectionResource()

```php
MySQL::setConnectionResource( resource &$conn ): void
```

Instead of opening a new connection, set the
connection resource of the already opend connection


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conn` | **resource** | The connection resource |




---

### isConnected

Yadal::isConnected()

```php
MySQL::isConnected(  ): boolean
```

Return if we have a connection or not





---

### dbDate

Yadal::dbDate()

```php
MySQL::dbDate( string $y, string $m, string $d ): string
```

Convert the given date to the correct database format.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$y` | **string** | The year of the date which should be converteds |
| `$m` | **string** | The month of the date which should be converteds |
| `$d` | **string** | The day of the date which should be converteds |


**Return Value:**

the date in the correct format or null when the date could not be converted



---

### array2case

Yadal::array2case()

```php
MySQL::array2case( string $field, array $options, string $default = &#039;Unknown&#039; ): string
```

Change an array to a CASE statement which can be used in an query.
Example:
array2case( 'UserType', array( 1 => 'Admin', 2 => 'Moderator', 3 => 'User' ) );

Result:
CASE `UserType`
 WHEN 1 THEN 'Admin'
 WHEN 2 THEN 'Moderator'
 WHEN 3 THEN 'User'
 ELSE 'Unknown'
END


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **string** | The field which we should use in the case or if statement |
| `$options` | **array** | Array of options. The array key will be used as statement compare-item and the value will be used as value |
| `$default` | **string** | The default value if none of the array keys are matched. Default is "Unknown". If you dont want to have a default value, use false |




---

### quoteNumbers

Yadal::quoteNumbers()

```php
MySQL::quoteNumbers(  ): boolean
```

Do we have to quote numbers ?





---

### quote

Yadal::quote()

```php
MySQL::quote( string $name ): string
```

Return the table name or field name quoted (so that spaces can be used)


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The table or field name which should me quoted |




---

### clearCache

Yadal::clearCache()

```php
MySQL::clearCache(  ): void
```

Clears the cache of most functions, like getUniqueFields, getNotNullFields, etc.





---

### getLastQuery

Yadal::getLastQuery()

```php
MySQL::getLastQuery(  ): string
```

Return the last query which was executed





---

### result

MySQL::result()

```php
MySQL::result( resource $sql, integer $row, string $field = null ): string
```

Return a specific result of a sql resource


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The sql where you want to get a result from |
| `$row` | **integer** | The row where you want a result from |
| `$field` | **string** | The field which result you want |




---

### getTables

MySQL::getTables()

```php
MySQL::getTables(  ): array
```

Return the tables from the database





---

### getFieldTypes

MySQL::getFieldTypes()

```php
MySQL::getFieldTypes( string $table ): array
```

Retrieve the field types of the given table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where we should fetch the fields and their types from |




---

### connect

MySQL::connect()

```php
MySQL::connect( string $host = &#039;localhost&#039;, string $username = &#039;&#039;, string $password = &#039;&#039;, string $charset = &#039;utf8&#039; ): resource
```

Make a connection with the database and
select the database.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **string** | the host to connect to |
| `$username` | **string** | the username which should be used to login |
| `$password` | **string** | the password which should be used to login |
| `$charset` | **string** | the charset for the connection |


**Return Value:**

The connection resource



---

### getNotNullFields

MySQL::getNotNullFields()

```php
MySQL::getNotNullFields( string $table ): array
```

Retrieve the fields that can not contain NULL


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table which fields we should retrieve |




---

### getUniqueFields

MySQL::getUniqueFields()

```php
MySQL::getUniqueFields( string $table ): array
```

Fetch the unique fields from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where the unique-value-field should be collected from |


**Return Value:**

multidimensional array of the unique indexes on the table



---

### getPrKeys

MySQL::getPrKeys()

```php
MySQL::getPrKeys(  $table ): array
```

Fetch the keys from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **** |  |


**Return Value:**

of the keys which are found



---

### recordCount

MySQL::recordCount()

```php
MySQL::recordCount( resource $sql ): integer
```

Return the number of records found by the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The resource which should be counted |




---

### getFieldNames

MySQL::getFieldNames()

```php
MySQL::getFieldNames( string $table ): array
```

Return the field names of the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where the field names should be collected from |




---

### escapeString

MySQL::escapeString()

```php
MySQL::escapeString( string $string ): string
```

Escape the string we are going to save from dangerous characters


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to escape |




---

### getRecord

MySQL::getRecord()

```php
MySQL::getRecord( resource $sql ): \assoc
```

Fetch a record in assoc mode and return it


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The resource which should be used to retireve a record from |


**Return Value:**

array or false when there are no records left



---

### getInsertId

MySQL::getInsertId()

```php
MySQL::getInsertId(  ): integer
```

Get the id of the last inserted record





---

### query

MySQL::query()

```php
MySQL::query( string $query ): resource
```

Execute the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** | the query which should be executed |




---

### close

MySQL::close()

```php
MySQL::close(  ): boolean
```

Close the connection





---

### getError

MySQL::getError()

```php
MySQL::getError(  ): string
```

Return the last error





---

### GetErrorNo



```php
MySQL::GetErrorNo(  )
```







---

### getErrorNo

MySQL::getErrorNo()

```php
MySQL::getErrorNo(  ): integer
```

Return the error number





---

## ODBC

class ODBC

Yadal - Yet Another Database Abstraction Layer
ODBC

* Full name: \ODBC
* Parent class: \Yadal


### __construct

ODBC::__construct()

```php
ODBC::__construct( string $db ): \ODBC
```

Constructor


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$db` | **string** | the database we are using |




---

### setConnectionResource

Yadal::setConnectionResource()

```php
ODBC::setConnectionResource( resource &$conn ): void
```

Instead of opening a new connection, set the
connection resource of the already opend connection


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conn` | **resource** | The connection resource |




---

### isConnected

Yadal::isConnected()

```php
ODBC::isConnected(  ): boolean
```

Return if we have a connection or not





---

### dbDate

Yadal::dbDate()

```php
ODBC::dbDate( string $y, string $m, string $d ): string
```

Convert the given date to the correct database format.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$y` | **string** | The year of the date which should be converteds |
| `$m` | **string** | The month of the date which should be converteds |
| `$d` | **string** | The day of the date which should be converteds |


**Return Value:**

the date in the correct format or null when the date could not be converted



---

### array2case

Yadal::array2case()

```php
ODBC::array2case( string $field, array $options, string $default = &#039;Unknown&#039; ): string
```

Change an array to a CASE statement which can be used in an query.
Example:
array2case( 'UserType', array( 1 => 'Admin', 2 => 'Moderator', 3 => 'User' ) );

Result:
CASE `UserType`
 WHEN 1 THEN 'Admin'
 WHEN 2 THEN 'Moderator'
 WHEN 3 THEN 'User'
 ELSE 'Unknown'
END


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **string** | The field which we should use in the case or if statement |
| `$options` | **array** | Array of options. The array key will be used as statement compare-item and the value will be used as value |
| `$default` | **string** | The default value if none of the array keys are matched. Default is "Unknown". If you dont want to have a default value, use false |




---

### quoteNumbers

Yadal::quoteNumbers()

```php
ODBC::quoteNumbers(  ): boolean
```

Do we have to quote numbers ?





---

### quote

Yadal::quote()

```php
ODBC::quote( string $name ): string
```

Return the table name or field name quoted (so that spaces can be used)


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The table or field name which should me quoted |




---

### clearCache

Yadal::clearCache()

```php
ODBC::clearCache(  ): void
```

Clears the cache of most functions, like getUniqueFields, getNotNullFields, etc.





---

### getLastQuery

Yadal::getLastQuery()

```php
ODBC::getLastQuery(  ): string
```

Return the last query which was executed





---

### result

Yadal::result()

```php
ODBC::result( resource $sql, integer $row, string $field = null ): string
```

Return a specific result of a sql resource


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The sql where you want to get a result from |
| `$row` | **integer** | The row where you want a result from |
| `$field` | **string** | The field which result you want |




---

### getTables



```php
ODBC::getTables(  )
```







---

### getFieldTypes



```php
ODBC::getFieldTypes(  )
```







---

### connect

ODBC::connect()

```php
ODBC::connect(  $dsn = &#039;&#039;,  $username = &#039;&#039;,  $password = &#039;&#039; ): resource
```

Make a connection with the database and
select the database.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dsn` | **** |  |
| `$username` | **** |  |
| `$password` | **** |  |


**Return Value:**

The connection resource or false on failure



---

### getNotNullFields



```php
ODBC::getNotNullFields(  )
```







---

### getUniqueFields



```php
ODBC::getUniqueFields(  )
```







---

### getPrKeys



```php
ODBC::getPrKeys(  )
```







---

### recordCount

ODBC::recordCount()

```php
ODBC::recordCount( resource $sql ): integer
```

Return the number of records found by the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The sql resource we have to count |




---

### getFieldNames

ODBC::getFieldNames()

```php
ODBC::getFieldNames( string $table ): array
```

Return the field names of the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | the table where we should fetch the field names from |




---

### escapeString

ODBC::escapeString()

```php
ODBC::escapeString( string $string ): string
```

Public: escape the string we are going to save from dangerous characters


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |




---

### getRecord

ODBC::getRecord()

```php
ODBC::getRecord( resource $sql ): \:
```

Fetch a record in assoc mode and return it


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The sql resource where we have to get a row from |


**Return Value:**

assoc array or false when there are no records left



---

### getInsertId

ODBC::getInsertId()

```php
ODBC::getInsertId(  ): integer
```

Get the id of the last inserted record





---

### query

ODBC::query()

```php
ODBC::query( string $query ): resource
```

Execute the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** | the query |




---

### close



```php
ODBC::close(  )
```







---

### getError

ODBC::getError()

```php
ODBC::getError(  ): string
```

Return the last error





---

### GetErrorNo



```php
ODBC::GetErrorNo(  )
```







---

### fetchKeys

ODBC::fetchKeys()

```php
ODBC::fetchKeys(  $table = null ): array
```

Public: fetch the keys from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **** |  |


**Return Value:**

of the keys which are found



---

### fetchUniqueFields

ODBC::fetchUniqueFields()

```php
ODBC::fetchUniqueFields( string $table = null ): array
```

Public: fetch the unique fields from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** |  |




---

## PostgreSQL

class PostgreSQL

Yadal - Yet Another Database Abstraction Layer
PostgreSQL class

* Full name: \PostgreSQL
* Parent class: \Yadal


### __construct

PostgreSQL::__construct()

```php
PostgreSQL::__construct( string $db )
```

Constructor


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$db` | **string** | The database to use to |




---

### setConnectionResource

Yadal::setConnectionResource()

```php
PostgreSQL::setConnectionResource( resource &$conn ): void
```

Instead of opening a new connection, set the
connection resource of the already opend connection


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conn` | **resource** | The connection resource |




---

### isConnected

Yadal::isConnected()

```php
PostgreSQL::isConnected(  ): boolean
```

Return if we have a connection or not





---

### dbDate

Yadal::dbDate()

```php
PostgreSQL::dbDate( string $y, string $m, string $d ): string
```

Convert the given date to the correct database format.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$y` | **string** | The year of the date which should be converteds |
| `$m` | **string** | The month of the date which should be converteds |
| `$d` | **string** | The day of the date which should be converteds |


**Return Value:**

the date in the correct format or null when the date could not be converted



---

### array2case

Yadal::array2case()

```php
PostgreSQL::array2case( string $field, array $options, string $default = &#039;Unknown&#039; ): string
```

Change an array to a CASE statement which can be used in an query.
Example:
array2case( 'UserType', array( 1 => 'Admin', 2 => 'Moderator', 3 => 'User' ) );

Result:
CASE `UserType`
 WHEN 1 THEN 'Admin'
 WHEN 2 THEN 'Moderator'
 WHEN 3 THEN 'User'
 ELSE 'Unknown'
END


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **string** | The field which we should use in the case or if statement |
| `$options` | **array** | Array of options. The array key will be used as statement compare-item and the value will be used as value |
| `$default` | **string** | The default value if none of the array keys are matched. Default is "Unknown". If you dont want to have a default value, use false |




---

### quoteNumbers

Yadal::quoteNumbers()

```php
PostgreSQL::quoteNumbers(  ): boolean
```

Do we have to quote numbers ?





---

### quote

Yadal::quote()

```php
PostgreSQL::quote( string $name ): string
```

Return the table name or field name quoted (so that spaces can be used)


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The table or field name which should me quoted |




---

### clearCache

Yadal::clearCache()

```php
PostgreSQL::clearCache(  ): void
```

Clears the cache of most functions, like getUniqueFields, getNotNullFields, etc.





---

### getLastQuery

Yadal::getLastQuery()

```php
PostgreSQL::getLastQuery(  ): string
```

Return the last query which was executed





---

### result

PostgreSQL::result()

```php
PostgreSQL::result( resource $result, integer $row, string $field = null ): string
```

Return a specific result of a sql resource


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$result` | **resource** | The sql result where you want to get a result from |
| `$row` | **integer** | The row where you want a result from |
| `$field` | **string** | The field which result you want |




---

### getTables

PostgreSQL::getTables()

```php
PostgreSQL::getTables(  ): array
```

Return the tables from the database





---

### getFieldTypes

PostgreSQL::getFieldTypes()

```php
PostgreSQL::getFieldTypes( string $table ): array
```

Retrieve the field types of the given table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where we should fetch the fields and their types from |




---

### connect

PostgreSQL::connect()

```php
PostgreSQL::connect(  $host = &#039;&#039;,  $username = &#039;&#039;,  $password = &#039;&#039;,  $charset = &#039;UTF8&#039;,  $datestyle = &#039;ISO&#039; ): resource
```

Public: Make a connection with the database and
select the database.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **** |  |
| `$username` | **** |  |
| `$password` | **** |  |
| `$charset` | **** |  |
| `$datestyle` | **** |  |


**Return Value:**

The connection resource or false on failure



---

### getNotNullFields

PostgreSQL::getNotNullFields()

```php
PostgreSQL::getNotNullFields( string $table ): array
```

Retrieve the fields that can not contain NULL


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table which fields we should retrieve |




---

### getUniqueFields

PostgreSQL::getUniqueFields()

```php
PostgreSQL::getUniqueFields( string $table ): array
```

Fetch the unique keys from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where we should fetch the unique fields from |




---

### getPrKeys

PostgreSQL::getPrKeys()

```php
PostgreSQL::getPrKeys( string $table ): array
```

Fetch the keys from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where we should retrieve the keys from |




---

### recordCount

PostgreSQL::recordCount()

```php
PostgreSQL::recordCount(  $sql ): integer
```

Return the number of records found by the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **** |  |




---

### getFieldNames

PostgreSQL::getFieldNames()

```php
PostgreSQL::getFieldNames( string $table ): array
```

Return the field names of the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table to get the field names from |




---

### escapeString

PostgreSQL::escapeString()

```php
PostgreSQL::escapeString( string $string ): string
```

Escape the string we are going to save from dangerous characters


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string which should be escaped |




---

### getRecord

PostgreSQL::getRecord()

```php
PostgreSQL::getRecord( resource $sql ): \assoc
```

Fetch a record in assoc mode and return it


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The sql resource where we should get a record from |


**Return Value:**

array or false when there are no records left



---

### getInsertId

PostgreSQL::getInsertId()

```php
PostgreSQL::getInsertId( string $table ): integer
```

Get the id of the last inserted record


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | de tabel waarvan de laatste id van terug gegeven moet worden |




---

### query

PostgreSQL::query()

```php
PostgreSQL::query( string $query ): resource
```

Execute a query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** | The query which should be executed |




---

### close

PostgreSQL::close()

```php
PostgreSQL::close(  ): boolean
```

Close the connection





---

### getError

PostgreSQL::getError()

```php
PostgreSQL::getError( resource $sql = null ): string
```

Return the last error


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | When you give a sql resource as parameter the last error of that result will be returned |




---

### GetErrorNo



```php
PostgreSQL::GetErrorNo(  )
```







---

## Yadal

class Yadal

Yadal - Yet Another Database Abstraction Layer
Abstract Database class

* Full name: \Yadal


### __construct

Yadal::__construct()

```php
Yadal::__construct( string $db = null )
```

Abstract constructor: store the db name.
Dont use this class to make a new Yadal object!!! Use the function
newYadal() instead!!


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$db` | **string** | the database we are using |




---

### setConnectionResource

Yadal::setConnectionResource()

```php
Yadal::setConnectionResource( resource &$conn ): void
```

Instead of opening a new connection, set the
connection resource of the already opend connection


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conn` | **resource** | The connection resource |




---

### isConnected

Yadal::isConnected()

```php
Yadal::isConnected(  ): boolean
```

Return if we have a connection or not





---

### dbDate

Yadal::dbDate()

```php
Yadal::dbDate( string $y, string $m, string $d ): string
```

Convert the given date to the correct database format.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$y` | **string** | The year of the date which should be converteds |
| `$m` | **string** | The month of the date which should be converteds |
| `$d` | **string** | The day of the date which should be converteds |


**Return Value:**

the date in the correct format or null when the date could not be converted



---

### array2case

Yadal::array2case()

```php
Yadal::array2case( string $field, array $options, string $default = &#039;Unknown&#039; ): string
```

Change an array to a CASE statement which can be used in an query.
Example:
array2case( 'UserType', array( 1 => 'Admin', 2 => 'Moderator', 3 => 'User' ) );

Result:
CASE `UserType`
 WHEN 1 THEN 'Admin'
 WHEN 2 THEN 'Moderator'
 WHEN 3 THEN 'User'
 ELSE 'Unknown'
END


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **string** | The field which we should use in the case or if statement |
| `$options` | **array** | Array of options. The array key will be used as statement compare-item and the value will be used as value |
| `$default` | **string** | The default value if none of the array keys are matched. Default is "Unknown". If you dont want to have a default value, use false |




---

### quoteNumbers

Yadal::quoteNumbers()

```php
Yadal::quoteNumbers(  ): boolean
```

Do we have to quote numbers ?





---

### quote

Yadal::quote()

```php
Yadal::quote( string $name ): string
```

Return the table name or field name quoted (so that spaces can be used)


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The table or field name which should me quoted |




---

### clearCache

Yadal::clearCache()

```php
Yadal::clearCache(  ): void
```

Clears the cache of most functions, like getUniqueFields, getNotNullFields, etc.





---

### getLastQuery

Yadal::getLastQuery()

```php
Yadal::getLastQuery(  ): string
```

Return the last query which was executed





---

### result

Yadal::result()

```php
Yadal::result( resource $sql, integer $row, string $field = null ): string
```

Return a specific result of a sql resource


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The sql where you want to get a result from |
| `$row` | **integer** | The row where you want a result from |
| `$field` | **string** | The field which result you want |




---

### getTables



```php
Yadal::getTables(  )
```







---

### getFieldTypes



```php
Yadal::getFieldTypes(  )
```







---

### connect



```php
Yadal::connect(  )
```







---

### getNotNullFields



```php
Yadal::getNotNullFields(  )
```







---

### getUniqueFields



```php
Yadal::getUniqueFields(  )
```







---

### getPrKeys



```php
Yadal::getPrKeys(  )
```







---

### recordCount



```php
Yadal::recordCount(  )
```







---

### getFieldNames



```php
Yadal::getFieldNames(  )
```







---

### escapeString



```php
Yadal::escapeString(  )
```







---

### getRecord



```php
Yadal::getRecord(  )
```







---

### getInsertId



```php
Yadal::getInsertId(  )
```







---

### query



```php
Yadal::query(  )
```







---

### close



```php
Yadal::close(  )
```







---

### getError



```php
Yadal::getError(  )
```







---

### GetErrorNo



```php
Yadal::GetErrorNo(  )
```







---

## YadalMySQLi

class YadalMySQLi

Yadal - Yet Another Database Abstraction Layer
MySQL class

* Full name: \YadalMySQLi
* Parent class: \Yadal


### __construct

MySQLi::__construct()

```php
YadalMySQLi::__construct( string $db )
```

Constructor: set the database we should be using


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$db` | **string** | The database which should be used |




---

### setConnectionResource

Yadal::setConnectionResource()

```php
YadalMySQLi::setConnectionResource( resource &$conn ): void
```

Instead of opening a new connection, set the
connection resource of the already opend connection


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$conn` | **resource** | The connection resource |




---

### isConnected

Yadal::isConnected()

```php
YadalMySQLi::isConnected(  ): boolean
```

Return if we have a connection or not





---

### dbDate

Yadal::dbDate()

```php
YadalMySQLi::dbDate( string $y, string $m, string $d ): string
```

Convert the given date to the correct database format.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$y` | **string** | The year of the date which should be converteds |
| `$m` | **string** | The month of the date which should be converteds |
| `$d` | **string** | The day of the date which should be converteds |


**Return Value:**

the date in the correct format or null when the date could not be converted



---

### array2case

Yadal::array2case()

```php
YadalMySQLi::array2case( string $field, array $options, string $default = &#039;Unknown&#039; ): string
```

Change an array to a CASE statement which can be used in an query.
Example:
array2case( 'UserType', array( 1 => 'Admin', 2 => 'Moderator', 3 => 'User' ) );

Result:
CASE `UserType`
 WHEN 1 THEN 'Admin'
 WHEN 2 THEN 'Moderator'
 WHEN 3 THEN 'User'
 ELSE 'Unknown'
END


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **string** | The field which we should use in the case or if statement |
| `$options` | **array** | Array of options. The array key will be used as statement compare-item and the value will be used as value |
| `$default` | **string** | The default value if none of the array keys are matched. Default is "Unknown". If you dont want to have a default value, use false |




---

### quoteNumbers

Yadal::quoteNumbers()

```php
YadalMySQLi::quoteNumbers(  ): boolean
```

Do we have to quote numbers ?





---

### quote

Yadal::quote()

```php
YadalMySQLi::quote( string $name ): string
```

Return the table name or field name quoted (so that spaces can be used)


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The table or field name which should me quoted |




---

### clearCache

Yadal::clearCache()

```php
YadalMySQLi::clearCache(  ): void
```

Clears the cache of most functions, like getUniqueFields, getNotNullFields, etc.





---

### getLastQuery

Yadal::getLastQuery()

```php
YadalMySQLi::getLastQuery(  ): string
```

Return the last query which was executed





---

### result

MySQLi::result()

```php
YadalMySQLi::result( resource $sql, integer $row, string $field ): string
```

Return a specific result of a sql resource


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The sql where you want to get a result from |
| `$row` | **integer** | The row where you want a result from |
| `$field` | **string** | The field which result you want |




---

### getTables

MySQLi::getTables()

```php
YadalMySQLi::getTables(  ): array
```

Return the tables from the database





---

### getFieldTypes

MySQLi::getFieldTypes()

```php
YadalMySQLi::getFieldTypes( string $table ): array
```

Retrieve the field types of the given table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where we should fetch the fields and their types from |




---

### connect

MySQLi::connect()

```php
YadalMySQLi::connect(  $host = &#039;localhost&#039;,  $username = &#039;&#039;,  $password = &#039;&#039;,  $charset = &#039;utf8&#039; ): resource
```

Make a connection with the database and
select the database.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$host` | **** |  |
| `$username` | **** |  |
| `$password` | **** |  |
| `$charset` | **** |  |


**Return Value:**

The connection resource



---

### getNotNullFields

MySQLi::getNotNullFields()

```php
YadalMySQLi::getNotNullFields( string $table ): array
```

Retrieve the fields that can not contain NULL


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table which fields we should retrieve |




---

### getUniqueFields

MySQLi::getUniqueFields()

```php
YadalMySQLi::getUniqueFields( string $table ): array
```

Fetch the unique fields from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where the unique-value-field should be collected from |


**Return Value:**

multidimensional array of the unique indexes on the table



---

### getPrKeys

MySQLi::getPrKeys()

```php
YadalMySQLi::getPrKeys( string $table ): array
```

Fetch the keys from the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where we should fetch the keys from |


**Return Value:**

of the keys which are found



---

### recordCount

MySQLi::recordCount()

```php
YadalMySQLi::recordCount( resource $sql ): integer
```

Return the number of records found by the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The resource which should be counted |




---

### getFieldNames

MySQLi::getFieldNames()

```php
YadalMySQLi::getFieldNames( string $table ): array
```

Return the field names of the table


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **string** | The table where the field names should be collected from |




---

### escapeString

MySQLi::escapeString()

```php
YadalMySQLi::escapeString( string $string ): string
```

Escape the string we are going to save from dangerous characters


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to escape |




---

### getRecord

MySQLi::getRecord()

```php
YadalMySQLi::getRecord( resource $sql ): \assoc
```

Fetch a record in assoc mode and return it


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **resource** | The resource which should be used to retireve a record from |


**Return Value:**

array or false when there are no records left



---

### getInsertId

MySQLi::getInsertId()

```php
YadalMySQLi::getInsertId(  ): integer
```

Get the id of the last inserted record





---

### query

MySQLi::query()

```php
YadalMySQLi::query( string $query ): resource
```

Execute the query


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **string** | the query which should be executed |




---

### close

MySQLi::close()

```php
YadalMySQLi::close(  ): boolean
```

Close the connection





---

### getError

MySQLi::getError()

```php
YadalMySQLi::getError(  ): string
```

Return the last error





---

### GetErrorNo



```php
YadalMySQLi::GetErrorNo(  )
```







---

### getErrorNo

MySQLi::getErrorNo()

```php
YadalMySQLi::getErrorNo(  ): integer
```

Return the error number





---

### mysqli_result



```php
YadalMySQLi::mysqli_result(  $res,  $row,  $field )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **** |  |
| `$row` | **** |  |
| `$field` | **** |  |




---



--------
> This document was automatically generated from source code comments on 2018-02-02 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
