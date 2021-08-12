<?php 
session_start();
require_once ("../../includes/db.php");

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);

$userid = $input['userid'];//"1";
$today = date('Y-m-d H:i:s');
$result = $db->query("SELECT * FROM customer_packages WHERE studentid=$userid", PDO::FETCH_ASSOC);

foreach($result as $key => $value){
	
	$finishdate[$key]=$value;
	
}

for($i=0;$i<sizeof($finishdate);$i++){
	
	$expire_dt = date("Y-m-d H:i:s", strtotime($finishdate[$i]["finishdate"]));
	
	if($today < $expire_dt){
		
		$response["status"] = 1;
		$response["message"] = "Aktif bir paketiniz mevcut";
		
	}else{
		
		$response["status"] = 0;
		$response["message"] = "Aktif bir paketiniz yok";
		
		}	
}

// echoing JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>