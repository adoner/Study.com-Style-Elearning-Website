<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];//'1';
$result = $db->query("SELECT * FROM questions_answers WHERE tutorId='$userid' AND solved='0' AND refused = '0'");
$response["assigned"] = array();	

foreach($result as $row){

	$assigned = array();
	$assigned["id"] = $row["id"];
	$assigned["lecturename"] = $row["lecturename"];
	$assigned["notes"] = $row["notes"];
	$assigned["askingDate"] = $row["askingDate"];
	
	//push single etkinlik into final response array
	array_push($response["assigned"], $assigned);	
}

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>
