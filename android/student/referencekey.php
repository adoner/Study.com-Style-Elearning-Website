<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];
$result = $db->query("SELECT * FROM students WHERE id=$userid")->fetch();

$response["referencekey"] = $result["reference_key"];

echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>
