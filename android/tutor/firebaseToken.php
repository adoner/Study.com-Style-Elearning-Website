<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

if($_SERVER['REQUEST_METHOD'] =='POST'){
	
	$tutorid = $_POST["userid"];
	$token = $_POST["token"];
	
	$result = $db->query("UPDATE tutors SET firebasetoken = '$token' WHERE id = '$tutorid'");

	if($result){
		
		echo "Mesajınız başarıyla iletildi";
		
	}else{
			
		echo "Lütfen Tekrar Deneyiniz.";
			
	}
	
}else{
	
	echo "Hata Oluştu.";
	
}
?>