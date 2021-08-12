<?php 
session_start();
require_once ("../../includes/db.php");

$userid = $_POST["userid"];//'1';
$switch1 = $_POST["switch1Status"];
$switch2 = $_POST["switch2Status"];
$switch3 = $_POST["switch3Status"];

$result = $db->query("UPDATE students SET notfSolution = '$switch1', notfCampaign = '$switch2', notfGeneral = '$switch3' WHERE id = '$userid'");
	
?>
