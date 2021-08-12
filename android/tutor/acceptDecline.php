<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$response = $_POST["response"];
$questionid = $_POST["questionid"];//'1';

$sql = $db->query("SELECT * FROM questions_answers WHERE id = '$questionid'")->fetch();

if($response == "accept"){
	
	$acceptDate = date("Y-m-d H:i:s");
	$result = $db->query("UPDATE questions_answers SET assigned = '1', accepted = '1', acceptDate = '$acceptDate' WHERE id = '$questionid'");

}

if($response == "decline"){
	
	$answeringDate = date("Y-m-d H:i:s");
	
	if($_POST["declineresult"]=="0"){$declineResult = "Kötü Fotoğraf Kalitesi";}
	if($_POST["declineresult"]=="1"){$declineResult = "Yanlış Ders";}
	if($_POST["declineresult"]=="2"){$declineResult = "Eksik Soru";}
	if($_POST["declineresult"]=="3"){$declineResult = "Hatalı Soru";}
	
	$result = $db->query("UPDATE questions_answers SET assigned = '1', refused = '1', refusingnote = '$declineResult', answeringDate = '$answeringDate' WHERE id = '$questionid'");
	$tutorsql = $db->query("SELECT * FROM tutors WHERE id = '$sql[tutorId]'")->fetch();
	$countupdate = $tutorsql["q_count"]-1;
	$tutorupdate = $db->query("UPDATE tutors SET q_count = '$countupdate' WHERE id = '$sql[tutorId]'");
	$package = $db->query("SELECT * FROM customer_packages WHERE id = '$sql[packageid]'")->fetch();
	$editaskedquestion = $package["askedquestion"] - 1;
	$askedupdate = $db->query("UPDATE customer_packages SET askedquestion = '$editaskedquestion' WHERE id = '$sql[packageid]'");
}

?>
