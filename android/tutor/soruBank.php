<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$questionid = $_POST["questionid"];
$result = $db->query("SELECT * FROM questions_answers WHERE id='$questionid'")->fetch();
$result2 = $db->query("SELECT * FROM questionbank WHERE lecture='$result[lecturename]' ORDER BY id ASC");
$response["subjectdata"] = array();	

foreach($result2 as $row){

	$subjectdata = array();
	$subjectdata["subject"] = $row["subject"];
	
	//push single etkinlik into final response array
	array_push($response["subjectdata"], $subjectdata);	
}

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>
