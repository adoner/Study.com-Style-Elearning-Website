<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$lecture = $_POST["lecture"];
$result = $db->query("SELECT * FROM questionbank WHERE lecture='$lecture' ORDER BY id ASC");
$response["questionbankdata"] = array();	

foreach($result as $row){

	$questionbankdata = array();
	$questionbankdata["subject"] = $row["subject"];
	
	//push single etkinlik into final response array
	array_push($response["questionbankdata"], $questionbankdata);	
}

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>
