<?php
session_start();
require_once("../../includes/db.php");
require_once("../../includes/functions.php");

if($_SERVER['REQUEST_METHOD'] =='POST'){
	
	//$questionid = $_POST["id"];
	$ImageData = $_POST['image'];
	$ImageName = $_POST['name'];
	$ImagePath = "../../tutorcertificatephotos/$ImageName";
    //$sql = $db->query("UPDATE questions_answers SET answerName = '$ImageName' WHERE id = '$questionid'");	
    file_put_contents($ImagePath, base64_decode($ImageData));
		
} else {
	
    echo "Hata Oluştu.";
	
}
?>