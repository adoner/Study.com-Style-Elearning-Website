<?php
define('DB_USER', "u8782172_snluser"); // db user
define('DB_PASSWORD', "KCqj02D8"); // db password (mention your db password here)
define('DB_DATABASE', "u8782172_snltbsr"); // database name
define('DB_SERVER', "94.73.151.83"); // db server

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
$con->set_charset("utf8");  
// Check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
?>