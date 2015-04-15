<?php

// connect to database
$dbc = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME)
or die('Error connecting to MySQL server');

// connect to database
$query = "SELECT * FROM table_name";
$result = mysqli_query($dbc, $query)
or die('Error querying the database.');

?>
/**
 * Created by PhpStorm.
 * User: squid_000
 * Date: 4/14/2015
 * Time: 10:14 PM
 */