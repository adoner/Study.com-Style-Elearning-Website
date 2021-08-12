<?php 
session_start();
require_once ("../../includes/db.php");

$userid = $_POST["userid"];//'1';
$switchStatus = $_POST["switchStatus"];

$result = $db->query("UPDATE tutors SET available = '$switchStatus' WHERE id = '$userid'");

?>
