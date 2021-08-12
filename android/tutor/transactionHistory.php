<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];
$result = $db->query("SELECT * FROM transactions WHERE tutorid = '$userid' AND confirmed = '1'", PDO::FETCH_ASSOC);
$result2 = $db->query("SELECT * FROM transactions WHERE tutorid = '$userid' AND confirmed = '0'", PDO::FETCH_ASSOC);
$qryforcount = $db->query("SELECT COUNT(*) as num FROM transactions WHERE tutorid = '$userid' AND confirmed = '1'", PDO::FETCH_ASSOC);
$count = $qryforcount->fetchColumn();
$qryforcount2 = $db->query("SELECT COUNT(*) as num FROM transactions WHERE tutorid = '$userid' AND confirmed = '0'", PDO::FETCH_ASSOC);
$count2 = $qryforcount2->fetchColumn();

$response["transactions"] = array();
$response["processing"] = array();

if($count > 0 and $count2 == 0){
	
	foreach( $result as $row ){
	
		$transactions = array();
		$transactions["title"] = $row["title"];
		$transactions["amount"] = $row["amount"];
		$transactions["counter"] = "2";
		$transactions["transactiondate"] = date("d-m-Y", strtotime($row["transactiondate"]));
			
		// push single etkinlik into final response array
		array_push($response["transactions"], $transactions);
	}

		$processing = array();
		$processing["title"] = "0";
		$processing["amount"] = "0";
		$processing["transactiondate"] = "0";
		// push single etkinlik into final response array
		array_push($response["processing"], $processing);
	
}

if($count > 0 and $count2 > 0){
	
	foreach( $result as $row ){
	
		$transactions = array();
		$transactions["title"] = $row["title"];
		$transactions["amount"] = $row["amount"];
		$transactions["counter"] = "3";
		$transactions["transactiondate"] = date("d-m-Y", strtotime($row["transactiondate"]));
			
		// push single etkinlik into final response array
		array_push($response["transactions"], $transactions);
	}

	foreach( $result2 as $row2 ){
		
		$processing = array();
		$processing["title"] = $row2["title"];
		$processing["amount"] = $row2["amount"];
		$processing["transactiondate"] = $row2["transactiondate"];
		// push single etkinlik into final response array
		array_push($response["processing"], $processing);
		
	}
	
}

if($count == 0 and $count2 > 0){
	
	foreach( $result2 as $row2 ){
		
		$processing = array();
		$processing["title"] = $row2["title"];
		$processing["amount"] = $row2["amount"];
		$processing["transactiondate"] = $row2["transactiondate"];
		// push single etkinlik into final response array
		array_push($response["processing"], $processing);
		
	}

		$transactions = array();
		$transactions["title"] = "0";
		$transactions["amount"] = "0";
		$transactions["transactiondate"] = "0";
		$transactions["counter"] = "1";
		// push single etkinlik into final response array
		array_push($response["transactions"], $transactions);
	
}

if($count==0 and $count2 == 0){
	
	$transactions = array();
	$processing = array();
	$transactions["title"] = "0";
	$transactions["amount"] = "0";
	$transactions["transactiondate"] = "0";
	$transactions["counter"] = "0";
	$processing["title"] = "0";
	$processing["amount"] = "0";
	$processing["transactiondate"] = "0";

	// push single etkinlik into final response array
	array_push($response["transactions"], $transactions);
	array_push($response["processing"], $processing);

}
// echoing JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);
	
?>