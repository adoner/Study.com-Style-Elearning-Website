<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

if($_SERVER['REQUEST_METHOD'] =='POST'){
	
$tutorid = $_POST["userid"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$date = date('Y-m-d H:i:s');
$response["message"] = array();	

$result = $db->query("INSERT INTO adminmessages (tutorid, subject, message, messagedate, viewed) VALUES ('$tutorid','$subject','$message','$date','0')");

if($result){
	
	$response["message"] = "Mesajınız başarıyla iletildi";
	
	}else{
		
		$response["message"] = "Lütfen Tekrar Deneyiniz.";
		
		}
	
}else{
	
	$response["message"] = "Hata Oluştu.";
	
	}
//echo JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>