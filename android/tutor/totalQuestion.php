<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];//'1';
$result = $db->query("SELECT COUNT(*) as num FROM questions_answers WHERE tutorId='$userid' AND solved='1'");
$amount = $result->fetchColumn();
$response["totalamount"] = array();	

$totalamount = array();
$totalamount["totalquestion"] = $amount;
//push single etkinlik into final response array
array_push($response["totalamount"], $totalamount);	

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>
