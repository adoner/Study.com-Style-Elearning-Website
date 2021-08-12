<?php 
session_start();
require_once("../../includes/db.php");
require_once("../../includes/functions.php");
$input = "Rüştü ÇARŞILI";
getReferanceCode ($input);

///////////////////////////////////////////////////////////
/*
$myStr = "5062168814";

$result = substr($myStr, 0, 1);

if($result==0){
	
	$myStr = $myStr;
	
	}else{
		
		$myStr = "0".$myStr;
		
		}
echo $myStr;
// multibyte strings
//$result = mb_substr($myStr, 0, 5);
*/
//////////////////////////////////////////////////////////////
/*function get_last_words($amount, $string)
{
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
$string = 'ahmeT MitHat          dÖner​';
$string = strtolower($string);
$result = ucwords(chop($string, get_last_words(0,$string)))." ".strtoupper(get_last_words(0,$string));
echo $result;

//Tarih ile alakalı
$startdate = date('Y-m-d H:i:s');
$mod_date = strtotime($startdate."+ 5 days");
echo date("Y-m-d H:i:s",$mod_date) . "\n";*/
?>