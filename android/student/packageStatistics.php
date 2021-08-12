<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];//"1";
$result = $db->query("SELECT * FROM customer_packages WHERE studentid = '$userid' AND status = '1'", PDO::FETCH_ASSOC);
$result2 = $db->query("SELECT * FROM customer_packages WHERE studentid = '$userid' AND status = '1'", PDO::FETCH_ASSOC);

foreach($result as $key => $value){
	
	$toplamsoru[$key] = $value;
	
}

for($i=0;$i<sizeof($toplamsoru);$i++){
	
	$soruhakki = $soruhakki + $toplamsoru[$i]["questionlimit"];
	
	}
	
$response["packagestat"] = array();

$result3 = $db->query("SELECT COUNT(*) as num FROM customer_packages WHERE studentid = '$userid' AND status = '1'");
$count = $result3->fetchColumn();

if($count>0){
	
	foreach($result2 as $row){
	
		$packagestat = array();
		$packagestat["packageid"] = $row["id"];
		$packagestat["questionlimit"] = $row["questionlimit"];
		$packagestat["askedquestion"] = $row["askedquestion"];
		//$packagestat["finishdate"] = date("m-d-Y H:i:s", strtotime($row["finishdate"]));
		$packagestat["soruhakki"] = $soruhakki;
		//push single etkinlik into final response array
		array_push($response["packagestat"], $packagestat);	
	}
}
if($count==0){

		$packagestat = array();
		$packagestat["packageid"] = "0";
		$packagestat["questionlimit"] = "0";
		$packagestat["askedquestion"] = "0";
		$packagestat["soruhakki"] = "0";
		//push single etkinlik into final response array
		array_push($response["packagestat"], $packagestat);	

}
//echo JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);	
?>