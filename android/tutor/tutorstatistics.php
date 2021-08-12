<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];

$qry = $db->query("SELECT COUNT(*) as num FROM questions_answers WHERE tutorId='$userid'", PDO::FETCH_ASSOC);
$total = $qry->fetchColumn();

$qry2 = $db->query("SELECT COUNT(*) as num FROM questions_answers WHERE tutorId='$userid' AND solved = '1'", PDO::FETCH_ASSOC);
$solved = $qry2->fetchColumn();

$qry3 = $db->query("SELECT COUNT(*) as num FROM questions_answers WHERE tutorId='$userid' AND refused = '1'", PDO::FETCH_ASSOC);
$refused = $qry3->fetchColumn();

$qry4 = $db->query("SELECT COUNT(*) as num FROM questions_answers WHERE tutorId='$userid' AND timeover = '1'", PDO::FETCH_ASSOC);
$timeover = $qry4->fetchColumn();

$message = $db->query("SELECT COUNT(*) FROM tutormessages WHERE userid = '$userid' AND viewed = '0'");
$unviewed = $message->fetchColumn();

$sqlavarage = $db->query("SELECT * FROM questions_answers WHERE tutorId = '$userid'", PDO::FETCH_ASSOC);
$sqlearning = $db->query("SELECT * FROM questions_answers WHERE tutorId = '$userid'", PDO::FETCH_ASSOC);
$qryavarage = $db->query("SELECT COUNT(*) as num FROM questions_answers WHERE tutorId='$userid'", PDO::FETCH_ASSOC);
$count = $qryavarage->fetchColumn();
$avaragetime = 0;
$totalearnings = 0;

foreach($sqlavarage as $avarage){
	
	$avaragetime = $avaragetime + $avarage["spenttime"];
	
	}

$avarageanstime = round($avaragetime / $count, 2);

foreach($sqlearning as $earning){
	
	$totalearnings = $totalearnings + $earning["price"];
	
	}
	
$response["statistics"] = array();
$response["messages"] = array();

if($total>0){
	
	$qry5 = $db->query("SELECT * FROM tutors WHERE id = '$userid'", PDO::FETCH_ASSOC)->fetch();
	$rank = $qry5["rank"];

	$statistics = array();
	$statistics["total"] = $total;
	$statistics["solved"] = $solved;
	$statistics["refused"] = $refused;
	$statistics["timeover"] = $timeover;
	$statistics["avarageanstime"] = (string)$avarageanstime;
	$statistics["rank"] = $rank;
	$statistics["balance"] = $qry5["bakiye"];
	$statistics["status"] = $qry5["status"];
	$statistics["totalearning"] = $totalearnings;
	//push single etkinlik into final response array
	array_push($response["statistics"], $statistics);	
	
}

if($total==0){
	
	$qry6 = $db->query("SELECT * FROM tutors WHERE id = '$userid'", PDO::FETCH_ASSOC)->fetch();
	$statistics = array();
	$statistics["total"] = 0;
	$statistics["solved"] = 0;
	$statistics["refused"] = 0;
	$statistics["timeover"] = 0;
	$statistics["avarageanstime"] = 0;
	$statistics["rank"] = 0;
	$statistics["balance"] = 0;
	$statistics["status"] = $qry6["status"];
	$statistics["totalearning"] = "0";
	//push single etkinlik into final response array
	array_push($response["statistics"], $statistics);	
	}

$messages = array();
$messages["unviewed"] = $unviewed;
array_push($response["messages"], $messages);
//echo JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);	
?>