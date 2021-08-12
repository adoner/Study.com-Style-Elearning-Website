<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

if($_SERVER['REQUEST_METHOD'] =='POST'){
	
$tutorid = $_POST["userid"];
$iban = $_POST["iban"];
$name = $_POST["name"];
$birthdate = date("Y-m-d", strtotime($_POST["birthdate"]));
$amount = $_POST["amount"];
$today = date("Y-m-d H:i:s");

$qrybakiye = $db->query("SELECT * FROM tutors WHERE id = '$tutorid'")->fetch();

$result = $db->query("INSERT INTO transactions (tutorid, ibanno, name, birthdate, title, amount, transactiondate) VALUES ('$tutorid','$iban','$name','$birthdate','Banka hesabına aktarım','$amount','$today')");

if($result){
	
	$newamount = $qrybakiye["bakiye"] - $amount;
	$qry = $db->query("UPDATE tutors SET bakiye = '$newamount' WHERE id = '$tutorid'");
	echo "Mesajınız başarıyla iletildi";
	
	}else{
		
		echo "Lütfen Tekrar Deneyiniz.";
		
		}
	
}else{
	
	echo "Hata Oluştu.";
	
	}
?>