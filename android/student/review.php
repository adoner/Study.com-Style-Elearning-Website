<?php
$response = array();
include '../../includes/db.php';
 
$rating = $_POST["rating"];
$comment = $_POST["comment"];
$troubles = $_POST["troubles"];
$questionid = $_POST["questionid"];
 
$qry = $db->query("UPDATE questions_answers SET review = '$rating', studentcomment = '$comment', trouble = '$troubles' WHERE id = '$questionid'");
if($qry){

echo "Geribildirim elimize ulaştı";
	
}else{
	
echo "Bir hata oluştu.";

}
?>