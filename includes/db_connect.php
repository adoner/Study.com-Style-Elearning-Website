<?php
define('DB_USER', "username"); // db user
define('DB_PASSWORD', "pass"); // db password (mention your db password here)
define('DB_DATABASE', "databasename"); // database name
define('DB_SERVER', "server"); // db server

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
$con->set_charset("utf8");  
// Check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
?>