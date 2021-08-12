<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];
$result = $db->query("SELECT * FROM customer_packages WHERE studentid='$userid' AND status = '1' ORDER BY id ASC", PDO::FETCH_ASSOC);

$qry = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid'");
$rows = $qry->fetchColumn();
$qry2 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Matematik'");
$rows2 = $qry2->fetchColumn();
$qry3 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Geometri'");
$rows3 = $qry3->fetchColumn();
$qry4 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Fizik'");
$rows4 = $qry4->fetchColumn();
$qry5 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Kimya'");
$rows5 = $qry5->fetchColumn();
$qry6 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Biyoloji'");
$rows6 = $qry6->fetchColumn();
$qry7 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Türkçe'");
$rows7 = $qry7->fetchColumn();
$qry8 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Tarih'");
$rows8 = $qry8->fetchColumn();
$qry9 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Coğrafya'");
$rows9 = $qry9->fetchColumn();
$qry10 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Felsefe ve Din Kültürü'");
$rows10 = $qry10->fetchColumn();
$qry11 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'İngilizce'");
$rows11 = $qry11->fetchColumn();
$qry12 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Almanca'");
$rows12 = $qry12->fetchColumn();
$qry13 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Fransızca'");
$rows13 = $qry13->fetchColumn();
$qry14 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Fen Bilgisi'");
$rows14 = $qry14->fetchColumn();
$qry15 = $db->query("SELECT COUNT(*) FROM questions_answers WHERE studentid = '$userid' AND lecturename = 'Sosyal Bilgiler'");
$rows15 = $qry15->fetchColumn();

$message = $db->query("SELECT COUNT(*) FROM studentmessages WHERE userid = '$userid' AND viewed = '0'");
$unviewed = $message->fetchColumn();

$result2 = $db->query("SELECT COUNT(*) as num FROM customer_packages WHERE studentid = '$userid' AND status = '1'");
$count = $result2->fetchColumn();

$response["students"] = array();
$response["lectures"] = array();
$response["messages"] = array();

if($count>0){
	
	foreach($result as $row){
	
		$students = array();
		$students["packagename"] = $row["packagename"];
		$students["questionlimit"] = $row["questionlimit"];
		$students["askedquestion"] = $row["askedquestion"];
		$students["startdate"] = $row["startdate"];
		$students["finishdate"] = date("m-d-Y H:i:s", strtotime($row["finishdate"]));
		
		//push single etkinlik into final response array
		array_push($response["students"], $students);	
	}
}

if($count==0){
	
	$students = array();
	$students["packagename"] = "Aktif Bir Paket Yok.";
	$students["questionlimit"] = "0";
	$students["askedquestion"] = "0";
	$students["startdate"] = "0";
	$students["finishdate"] = "0";
	
	//push single etkinlik into final response array
	array_push($response["students"], $students);	

}

if($count>0){
	
	$lectures = array();
	$lectures["total"] = $rows;
	$lectures["matematik"] = $rows2;
	$lectures["geometri"] = $rows3;
	$lectures["fizik"] = $rows4;
	$lectures["kimya"] = $rows5;
	$lectures["biyoloji"] = $rows6;
	$lectures["turkce"] = $rows7;
	$lectures["tarih"] = $rows8;
	$lectures["cografya"] = $rows9;
	$lectures["felsefe"] = $rows10;
	$lectures["ingilizce"] = $rows11;
	$lectures["almanca"] = $rows12;
	$lectures["fransizca"] = $rows13;
	$lectures["fenbilgisi"] = $rows14;
	$lectures["sosyal"] = $rows15;
	array_push($response["lectures"], $lectures);
	
}

if($count==0){
	
	$lectures = array();
	$lectures["total"] = "0";
	$lectures["matematik"] = $rows2;
	$lectures["geometri"] = $rows3;
	$lectures["fizik"] = $rows4;
	$lectures["kimya"] = $rows5;
	$lectures["biyoloji"] = $rows6;
	$lectures["turkce"] = $rows7;
	$lectures["tarih"] = $rows8;
	$lectures["cografya"] = $rows9;
	$lectures["felsefe"] = $rows10;
	$lectures["ingilizce"] = $rows11;
	$lectures["almanca"] = $rows12;
	$lectures["fransizca"] = $rows13;
	$lectures["fenbilgisi"] = $rows14;
	$lectures["sosyal"] = $rows15;
	array_push($response["lectures"], $lectures);
	
}

$messages = array();
$messages["unviewed"] = $unviewed;
array_push($response["messages"], $messages);
//echo JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);	
?>