<?php
session_start();
include '../../includes/db.php';
include '../../includes/functions.php';

$userid = $_POST["userid"];
$name = $_POST["name"];
$email = $_POST["email"];
$sinif = $_POST["sinif"];
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
$name = ucwords(chop($name, get_last_words(0,$name)))." ".strtoupper(get_last_words(0,$name));
	
$qry = $db->query("UPDATE students SET name = '$name', email = '$email', city = '$city', class = '$sinif' WHERE id = '$userid'");

if($qry){
	
	echo "OK";
	
	}
?>