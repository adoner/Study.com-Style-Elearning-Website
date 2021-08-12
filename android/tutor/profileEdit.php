<?php 
session_start();
require_once ("../../includes/db.php");
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

if($_SERVER['REQUEST_METHOD'] =='POST'){
	
$tutorid = $_POST["tutorid"];
$name = $_POST["name"];
$email = $_POST["email"];
$birthdate = date("Y-m-d", strtotime($_POST["birthdate"]));
$city = $_POST["city"];

//Formatting name
	function get_last_words($amount, $string){
		$amount+=1;
		$string_array = explode(' ', $string);
		$totalwords= str_word_count($string, 1);
		if($totalwords > $amount){
			$words= implode(' ',array_slice($string_array, count($string_array) - $amount));
		}else{
			$words= implode(' ',array_slice($string_array, count($string_array) - $totalwords));
		}
	
		return $words;
	}
$name = strtolower($name);
$name = ucwords(chop($name, get_last_words(0,$name)))."".strtoupper(get_last_words(0,$name));
	
$result = $db->query("UPDATE tutors SET name = '$name', email = '$email', birthdate = '$birthdate', city = '$city' WHERE id = '$tutorid'");

if($result){
	
	echo "Profiliniz başarıyla güncellendi.";
	
	}else{
		
		echo "Lütfen Tekrar Deneyiniz.";
		
		}
	
}else{
	
	echo "Hata Oluştu.";
	
	}
?>