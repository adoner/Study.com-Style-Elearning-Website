<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];//'1';
$result = $db->query("SELECT * FROM tutors WHERE id='$userid'");
$response["checkstatus"] = array();	

foreach($result as $row){

	$checkstatus = array();
	$checkstatus["lecture"] = $row["lecture"];
	$checkstatus["available"] = $row["available"];
	
	//push single etkinlik into final response array
	array_push($response["checkstatus"], $checkstatus);	
}

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>
