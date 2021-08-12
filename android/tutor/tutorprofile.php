<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid =$_POST["tutorid"];
$result = $db->query("SELECT * FROM tutors WHERE id=$userid", PDO::FETCH_ASSOC);
$response["tutorprofile"] = array();

foreach( $result as $row ){

$tutorprofile = array();
$tutorprofile["name"] = $row["name"];
$tutorprofile["email"] = $row["email"];
$tutorprofile["phone"] = $row["phone"];
$tutorprofile["city"] = $row["city"];
$tutorprofile["birthdate"] = date("d-m-Y", strtotime($row["birthdate"]));
$tutorprofile["notfQrequest"] = $row["notfQrequest"];
$tutorprofile["notfGeneral"] = $row["notfGeneral"];

// push single etkinlik into final response array
array_push($response["tutorprofile"], $tutorprofile);
}

// echoing JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);
	
?>