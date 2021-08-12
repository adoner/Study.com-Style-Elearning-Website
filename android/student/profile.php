<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];//"1";
$result = $db->query("SELECT * FROM students WHERE id=$userid", PDO::FETCH_ASSOC);
// etkinlikler node

$response["contacts"] = array();

foreach( $result as $row ){
// looping through all results

$contacts = array();
$contacts["name"] = $row["name"];
$contacts["email"] = $row["email"];
$contacts["tel"] = $row["tel"];
$contacts["sinif"] = $row["class"];
$contacts["city"] = $row["city"];
$contacts["status"] = $row["status"];
$contacts["notfSolution"] = $row["notfSolution"];
$contacts["notfCampaign"] = $row["notfCampaign"];
$contacts["notfGeneral"] = $row["notfGeneral"];

// push single etkinlik into final response array
array_push($response["contacts"], $contacts);
}

// echoing JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);
	
?>