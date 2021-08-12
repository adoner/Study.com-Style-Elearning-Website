<?php 
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

$userid = $_POST["userid"];//'1';
$assigningdate = date('Y.m.d H:i:s');

$srg = $db->query("SELECT * FROM tutors WHERE id='$userid'",PDO::FETCH_ASSOC)->fetch();
$qry = $db->query("SELECT COUNT(*) FROM unassignedpool WHERE lecturename='$srg[lecture]'");
$total = $qry->fetchColumn();
if($srg["q_count"]<2){
	
	if($total > 0){
		
		$qry2 = $db->query("SELECT * FROM unassignedpool WHERE lecturename='$srg[lecture]'",PDO::FETCH_ASSOC)->fetch();
		$sorgu = $db->query("UPDATE questions_answers SET tutorId='$userid', assigningDate = '$assigningdate', assigned = '1' WHERE id='$qry2[qid]'");
		$q_count = $srg[q_count]+1;
		$qry3 = $db->query("UPDATE tutors SET q_count = '$q_count' WHERE id = '$userid'");
		
		$result = $db->query("SELECT * FROM questions_answers WHERE id='$qry2[qid]'",PDO::FETCH_ASSOC);
		$sorgu2 = $db->query("DELETE FROM unassignedpool WHERE id='$qry2[id]'");
		$response["pool"] = array();	
	
		foreach($result as $row){
		
			$pool = array();
			$pool["id"] = $row["id"];
			$pool["lecturename"] = $row["lecturename"];
			$pool["notes"] = $row["notes"];
			$pool["askingDate"] = $row["askingDate"];
			
			//push single etkinlik into final response array
			array_push($response["pool"], $pool);	
		}
	}
}
echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>
