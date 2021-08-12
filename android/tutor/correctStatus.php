<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];//'1';
$sql = $db->query("UPDATE tutors SET available = '0' WHERE id='$userid'");

?>
