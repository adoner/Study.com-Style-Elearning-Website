<?php
session_start();
require_once("../../includes/db.php");
require_once("../../includes/functions.php");

if($_SERVER['REQUEST_METHOD'] =='POST'){
	
	$userid = $_POST["userid"];
	$ImageData = $_POST['image'];
	$ImageName = $_POST['name'];
	$ImagePath = "../../uploads/questions/$ImageName";
    
    //$sql = $db->query("INSERT INTO questions_answers (studentid, questionName) VALUES ('$userid','$ImageName')");

		
        file_put_contents($ImagePath, base64_decode($ImageData));
        echo "Soru Fotoğrafı Başarıyla Gönderildi.";
		
		
} else {
	
    echo "Hata Oluştu.";
	
}
?>