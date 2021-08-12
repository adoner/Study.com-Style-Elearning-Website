<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = "1";//$_POST["userid"];
$result = $db->query("SELECT * FROM customer_packages WHERE studentid = '$userid' AND status = '0' ORDER BY id DESC", PDO::FETCH_ASSOC);	
$response["packagehistory"] = array();

foreach($result as $row){

	$packagehistory = array();
	$packagehistory["packageid"] = $row["id"];
	$packagehistory["packagename"] = $row["packagename"];
	$packagehistory["questionlimit"] = $row["questionlimit"];
	$packagehistory["askedquestion"] = $row["askedquestion"];
	$packagehistory["kalansoru"] = $row["questionlimit"] - $row["askedquestion"];
	$packagehistory["startdate"] = $row["startdate"];
	$packagehistory["finishdate"] = $row["finishdate"];
	//push single etkinlik into final response array
	array_push($response["packagehistory"], $packagehistory);	
}
//echo JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);	
?>