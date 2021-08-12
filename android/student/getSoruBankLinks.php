<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$subject = $_POST["subject"];//"15";

$result = $db->query("SELECT* FROM questions_answers WHERE subject='$subject' AND solved = '1'", PDO::FETCH_ASSOC);

$response["sbQuestions"] = array();

foreach($result as $row){

	$sbQuestions = array();
	$sbQuestions["questionid"] = $row["id"];
	$sbQuestions["questionlink"] = $row["questionName"];
	
	//push single etkinlik into final response array
	array_push($response["sbQuestions"], $sbQuestions);	
}

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>