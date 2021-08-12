<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];
$result = $db->query("SELECT * FROM questions_answers WHERE studentId='$userid' ORDER BY id DESC");
$response["questiondata"] = array();	

foreach($result as $row){

	$questiondata = array();
	$questiondata["questionid"] = $row["id"];
	$questiondata["questionName"] = $row["questionName"];
	$questiondata["answeringDate"] = date("d-m-Y H:i:s", strtotime($row["answeringDate"]));
	$questiondata["askingDate"] = date("d-m-Y H:i:s", strtotime($row["askingDate"]));
	$questiondata["lecturename"] = $row["lecturename"];
	$questiondata["notes"] = $row["notes"];
	$questiondata["assigned"] = $row["assigned"];
	$questiondata["refused"] = $row["refused"];
	$questiondata["accepted"] = $row["accepted"];
	$questiondata["solved"] = $row["solved"];
	$questiondata["refusingnote"] = $row["refusingnote"];
	
	//push single etkinlik into final response array
	array_push($response["questiondata"], $questiondata);	
}

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>
