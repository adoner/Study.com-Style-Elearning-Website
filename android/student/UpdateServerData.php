<?php
session_start();
require_once("../../includes/db.php");
require_once("../../includes/functions.php");

if($_SERVER['REQUEST_METHOD'] =='POST'){
	
	$userid = $_POST["userid"];
	$imagename = $_POST["imagename"];
	$askingdate = date('Y.m.d H:i:s');
	$assigningdate = date('Y.m.d H:i:s');
	$lecturename = $_POST["lecturename"];
	$notes = $_POST["notes"];
	
	$packid = $db->query("SELECT * FROM customer_packages WHERE studentid = '$userid' AND status = '1' ORDER BY id ASC LIMIT 1")->fetch();
	$packageid = $packid["id"];
	$updateasked = $packid["askedquestion"]+1;
	$update = $db->query("UPDATE customer_packages SET askedquestion = '$updateasked' WHERE id = '$packageid'");
	
	$sql = $db->query("INSERT INTO questions_answers (studentid, packageid, questionName, askingDate, lecturename, notes) VALUES ('$userid','$packageid','$imagename','$askingdate','$lecturename','$notes')");
	
	if($sql){
		
		echo "Soru Başarıyla Gönderildi.";
		$qryforlast = $db->query("SELECT * FROM questions_answers ORDER BY id DESC LIMIT 1")->fetch();
		$qry2 = $db->query("SELECT * FROM tutors WHERE lecture='$lecturename' AND available='1' AND q_count < 2",PDO::FETCH_ASSOC);

		foreach($qry2 as $key=>$value){
			
			$av_tutor[$key] = $value;
			
			}
		
		if(sizeof($av_tutor)>0){
			
			$temprank = $av_tutor[0]['rank'];
			$tutorid = $av_tutor[0]['id'];
	
			for($i=0;$i<sizeof($av_tutor);$i++){
					
				if($temprank > $av_tutor[$i+1]['rank']){
					
						$temprank = $temprank;
						$tutorid = $tutorid;
						
					}else{
						
						$temprank = $av_tutor[$i+1]['rank'];
						$tutorid = $av_tutor[$i+1]['id'];
						
						}
			}
			
			$main_array = array();
			for($j=0; $j<sizeof($av_tutor); $j++){
					
				if($temprank==$av_tutor[$j]['rank']){
					
				array_push($main_array, array("id"=>$av_tutor[$j]['id'],"rank"=>$av_tutor[$j]['rank']));
		
				}
			}

			if(sizeof($main_array)==1){
				
				$sorgu = $db->query("UPDATE questions_answers SET tutorId='$tutorid', assigningDate = '$assigningdate', assigned = '1' WHERE id='$qryforlast[id]'");
				$tutorsrg = $db->query("SELECT * FROM tutors WHERE id='$tutorid'")->fetch();
				$upd_count = $tutorsrg["q_count"]+1;
				$tutorsrg2 = $db->query("UPDATE tutors SET q_count='$upd_count' WHERE id='$tutorid'");
						
			}else{
				
				$sorgu2 = $db->query("SELECT * FROM tutors WHERE rank='$temprank' AND available='1' AND q_count='0'")->fetch();
				$sorgux = $db->query("SELECT COUNT(*) as num FROM tutors WHERE rank='$temprank' AND available='1' AND q_count='0'");
				$count = $sorgux->fetchColumn();
			
					if($count > 0){
						
						$sorgu3 = $db->query("UPDATE questions_answers SET tutorId='$sorgu2[id]', assigningDate = '$assigningdate',assigned = '1' WHERE id='$id'");
						$upd_count = $sorgu2["q_count"]+1;
						$sorgu4 = $db->query("UPDATE tutors SET q_count='$upd_count' WHERE id='$sorgu2[id]'");
						
					}
					
					if($count==0){
						
						$sorgu5 = $db->query("SELECT * FROM tutors WHERE rank='$temprank' AND available='1' AND q_count='1'")->fetch();
						$sorgu6 = $db->query("UPDATE questions_answers SET tutorId='$sorgu5[id]', assigningDate = '$assigningdate', assigned = '1' WHERE id='$id'");
						$upd_count = $sorgu5["q_count"]+1;
						$sorgu7 = $db->query("UPDATE tutors SET q_count='$upd_count' WHERE id='$sorgu5[id]'");
						
						}
			}
			
		}else{
			//in case of no available tutors
			$poolsrg = $db->query("SELECT * FROM questions_answers WHERE studentid = '$userid' AND questionName = '$imagename'")->fetch();
			$ttime = date('Y.m.d H:i:s');
			$poolqry = $db->query("INSERT INTO unassignedpool (qid,ttime,lecturename,q_date) VALUES ('$poolsrg[id]','$ttime','$lecturename','$askingdate')");
			
			}
		
	}else{
		
		echo "Lütfen Tekrar Deneyiniz.";
		
	}

} else {
	
    echo "Hata Oluştu.";
	
}
?>