<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$questionid =$_POST["questionid"];//"15";

$qry = $db->query("SELECT* FROM questions_answers WHERE id='$questionid'", PDO::FETCH_ASSOC)->fetch();

$response["imagelinks"] = array();

$imagelinks = array();
$imagelinks["questionlink"] = $qry["questionName"];
$imagelinks["answerlink"] = $qry["answerName"];

//push single etkinlik into final response array
array_push($response["imagelinks"], $imagelinks);	

//echo JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);	
?>