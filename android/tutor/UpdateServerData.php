<?php
session_start();
require_once("../../includes/db.php");
require_once("../../includes/functions.php");

if($_SERVER['REQUEST_METHOD'] =='POST'){
	
	$tutorid = $_POST["userid"];
	$questionid = $_POST["questionid"];
	$imagename = $_POST["imagename"];
	$answeringdate = date('Y.m.d H:i:s');
	$subject = $_POST["subject"];
	$notes = $_POST["notes"];
	
function getAnswerTime ($time1, $time2){
	
	$difference = $time1->diff($time2);
	return $difference;
	
	}
	
	$qryforgettingstdid = $db->query("SELECT * FROM questions_answers WHERE id = '$questionid'")->fetch();
	$qryforprice = $db->query("SELECT * FROM customer_packages WHERE studentid = '$qryforgettingstdid[studentid]' AND status = '1'")->fetch();
	$sql = $db->query("UPDATE questions_answers SET answerName = '$imagename', answeringDate = '$answeringdate', subject = '$subject', solved = '1', tutornotes = '$notes', price = '$qryforprice[price]' WHERE id = '$questionid'");

		
	if($sql){
		
		$qry = $db->query("SELECT * FROM tutors WHERE id = '$tutorid'")->fetch();
		$updatecount = $qry["q_count"]-1;
		$amount = $qry["bakiye"] + $qryforprice["price"];
		$tutorupdate = $db->query("UPDATE tutors SET q_count = '$updatecount', bakiye = '$amount' WHERE id = '$tutorid'");
		$sqlfortime = $db->query("SELECT * FROM questions_answers WHERE id = '$questionid'")->fetch();
		$datetime1 = new DateTime($sqlfortime["acceptDate"]); 
		$datetime2 = new DateTime($sqlfortime["answeringDate"]);
		$result = getAnswerTime($datetime1,$datetime2);
		$timediff = $result->format('%i');
		$qryfortime = $db->query("UPDATE questions_answers SET spenttime = '$timediff' WHERE id = '$questionid'");
		
		if($timediff>10){
			
			$qryfortime2 = $db->query("UPDATE questions_answers SET timeover = '1' WHERE id = '$questionid'");
			
			}
		echo "Cevap Başarıyla Gönderildi.";
		
	}else{
		
		echo "Lütfen Tekrar Deneyiniz.";
		
	}

} else {
	
    echo "Hata Oluştu.";
	
}
?>