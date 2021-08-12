<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];//"1";
$result = $db->query("SELECT * FROM tutormessages WHERE userid=$userid", PDO::FETCH_ASSOC);
// etkinlikler node

$response["messages"] = array();

foreach( $result as $row ){
// looping through all results

$messages = array();
$messages["id"] = $row["id"];
$messages["title"] = $row["title"];
$messages["body"] = $row["body"];
$messages["messagedate"] = $row["messagedate"];
$messages["viewed"] = $row["viewed"];
$messages["viewdate"] = $row["viewdate"];

// push single etkinlik into final response array
array_push($response["messages"], $messages);
}

// echoing JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);
	
?>