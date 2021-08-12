<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];
$result = $db->query("SELECT * FROM customer_packages WHERE studentid='$userid' AND status = '1' ORDER BY id ASC", PDO::FETCH_ASSOC);
$sql = $db->query("SELECT COUNT(*) as num FROM customer_packages WHERE studentid = '$userid' AND status = '1'");
$count = $sql->fetchColumn();
$result2 = $db->query("SELECT * FROM students WHERE id='$userid'", PDO::FETCH_ASSOC);
$result3 = $db->query("SELECT * FROM cards WHERE userid='$userid'", PDO::FETCH_ASSOC);
$sql2 = $db->query("SELECT COUNT(*) as num FROM cards WHERE userid = '$userid'");
$count2 = $sql2->fetchColumn();

$response["package"] = array();
$response["userearning"] = array();
$response["cards"] = array();

if($count>0){
	
	foreach($result as $row){
	
		$package = array();
		$package["packagename"] = $row["packagename"];
		$package["questionlimit"] = $row["questionlimit"];
		$package["askedquestion"] = $row["askedquestion"];
		$package["startdate"] = $row["startdate"];
		$package["finishdate"] = date("m-d-Y H:i:s", strtotime($row["finishdate"]));
		
		//push single etkinlik into final response array
		array_push($response["package"], $package);	
	}
}

if($count==0){
	
	$package = array();
	$package["packagename"] = "Aktif Bir Paket Yok.";
	$package["questionlimit"] = "0";
	$package["askedquestion"] = "0";
	$package["startdate"] = "0";
	$package["finishdate"] = "0";
	
	//push single etkinlik into final response array
	array_push($response["package"], $package);	

}
	
foreach($result2 as $row){

	$userearning = array();
	$userearning["earnings"] = $row["earnings"];

	//push single etkinlik into final response array
	array_push($response["userearning"], $userearning);	
}

if($count2>0){
	
	foreach($result3 as $row){
	
		$cards = array();
		$cards["fullname"] = $row["fullname"];
		$cards["cardno"] = $row["cardno"];
		$cards["validity"] = $row["validity"];
		$cards["cvv"] = $row["cvv"];	
		//push single etkinlik into final response array
		array_push($response["cards"], $cards);	
	}
}

if($count2==0){
	
	$cards = array();
	$cards["fullname"] = "0";
	$cards["cardno"] = "Aktif Bir Kartınız Yok.";
	$cards["validity"] = "0";
	$cards["cvv"] = "0";
	//push single etkinlik into final response array
	array_push($response["cards"], $cards);	

}

//echo JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);	
?>