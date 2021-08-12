<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];//'1';
$result = $db->query("SELECT * FROM questions_answers WHERE tutorId='$userid' AND solved='1'");
$response["qinfo"] = array();	

foreach($result as $row){

	$qinfo = array();
	$qinfo["lecturename"] = $row["lecturename"];
	$qinfo["notes"] = $row["notes"];
	$qinfo["askingDate"] = $row["askingDate"];
	$qinfo["questionid"] = $row["id"];
	
	//push single etkinlik into final response array
	array_push($response["qinfo"], $qinfo);	
}

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>
