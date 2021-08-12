<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];//'1';
$result = $db->query("SELECT * FROM questions_answers WHERE tutorId='$userid' AND refused='1' AND solved = '0'");
$response["refusedquestions"] = array();	

foreach($result as $row){

	$refusedquestions = array();
	$refusedquestions["lecturename"] = $row["lecturename"];
	$refusedquestions["refusingnote"] = $row["refusingnote"];
	$refusedquestions["askingDate"] = $row["askingDate"];
	$refusedquestions["questionid"] = $row["id"];
	
	//push single etkinlik into final response array
	array_push($response["refusedquestions"], $refusedquestions);	
}

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>
