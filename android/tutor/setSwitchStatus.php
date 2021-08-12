<?php 
session_start();
require_once ("../../includes/db.php");

$tutorid = $_POST["tutorid"];//'1';
$switch1 = $_POST["switch1Status"];
$switch2 = $_POST["switch2Status"];

$result = $db->query("UPDATE tutors SET notfQrequest = '$switch1', notfGeneral = '$switch2' WHERE id = '$tutorid'");
	
?>
