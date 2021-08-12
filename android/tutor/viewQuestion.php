<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$questionid = $_POST["questionid"];//"1";

$qry = $db->query("SELECT* FROM questions_answers WHERE id='$questionid'", PDO::FETCH_ASSOC)->fetch();
$srg = $db->query("SELECT * FROM students WHERE id='$qry[studentid]'", PDO::FETCH_ASSOC)->fetch();
$response["questiondata"] = array();

$questiondata = array();
$questiondata["name"] = $qry["questionName"];
$questiondata["lecture"] = $qry["lecturename"];
$questiondata["notes"] = $qry["notes"];
$questiondata["accepted"] = $qry["accepted"];
$questiondata["studentclass"] = $srg["class"];

//push single etkinlik into final response array
array_push($response["questiondata"], $questiondata);	

//echo JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);	
?>