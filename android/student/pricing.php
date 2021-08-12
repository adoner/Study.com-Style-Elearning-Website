<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$result = $db->query("SELECT * FROM packages", PDO::FETCH_ASSOC);
$response["prices"] = array();

foreach($result as $row){

	$prices = array();
	$prices["packagename"] = $row["packagename"];
	$prices["questionlimit"] = $row["questionlimit"];
	$prices["price"] = $row["price"];
	$prices["about"] = $row["about"];
	$prices["price_per_question"] = $row["price_per_question"];
	
	//push single etkinlik into final response array
	array_push($response["prices"], $prices);	
}
//echo JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);	
?>