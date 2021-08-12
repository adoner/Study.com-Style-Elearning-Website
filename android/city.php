<?php 
session_start();
require_once ("../includes/db.php");

$qry = $db->query("SELECT * FROM city", PDO::FETCH_ASSOC);

foreach($qry as $city){
	
	echo "\"".$city["il_adi"]."\",";
	
	}
?>