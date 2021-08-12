<?php
session_start();
require_once("db.php");
$random_salt_length = 32;

function seo($s) {
 $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
 $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
 $s = str_replace($tr,$eng,$s);
 $s = strtolower($s);
 $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
 $s = preg_replace('/\s+/', '-', $s);
 $s = preg_replace('|-+|', '-', $s);
 $s = preg_replace('/#/', '', $s);
 $s = str_replace('.', '', $s);
 $s = trim($s, '-');
 $s = trim($s, '?');
 return $s;
}

function keyGenerator($n){
	
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
	
}

function uzantibul($dosya) {
$uz = pathinfo($dosya);
$uz = $uz["extension"];
return $uz;
}

function imageNameGenerate($kackarakter) {
	 
	$char="abcdefghijklmnoprstuwvyzqxABCDEFGHIJKLMNOPRSTUVWYZQX1234567890"; /// İzin verilen karakterler ? 
	for ($k=1;$k<=$kackarakter;$k++){ 
		$h=substr($char,mt_rand(0,strlen($char)-1),1); 
		$q.=$h; 
	} 
	return $q;
		 
}

function sms_gonder ($Url,$strRequest) { 
	$ch=curl_init();
	$veri = http_build_query($strRequest);
	curl_setopt($ch, CURLOPT_URL, $Url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1) ;
	curl_setopt($ch, CURLOPT_POSTFIELDS,$veri);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

function userExists($username){
	$query = "SELECT email FROM students WHERE email = ?";
	global $con;
	if($stmt = $con->prepare($query)){
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt->store_result();
		$stmt->fetch();
		if($stmt->num_rows == 1){
			$stmt->close();
			return true;
		}
		$stmt->close();
	}
 
	return false;
}

function userExistsTutor($username){
	$query = "SELECT email FROM tutors WHERE email = ?";
	global $con;
	if($stmt = $con->prepare($query)){
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt->store_result();
		$stmt->fetch();
		if($stmt->num_rows == 1){
			$stmt->close();
			return true;
		}
		$stmt->close();
	}
 
	return false;
}
 
/**
* Creates a unique Salt for hashing the password
* 
* @return
**/
function getSalt(){
	global $random_salt_length;
	return bin2hex(openssl_random_pseudo_bytes($random_salt_length));
}
 
/**
* Creates password hash using the Salt and the password
* 
* @param $password
* @param $salt
* 
* @return
**/

function concatPasswordWithSalt($password,$salt){
	global $random_salt_length;
	if($random_salt_length % 2 == 0){
		$mid = $random_salt_length / 2;
	}
	else{
		$mid = ($random_salt_length - 1) / 2;
	}
 
	return
	substr($salt,0,$mid - 1).$password.substr($salt,$mid,$random_salt_length - 1);
 
}

function getReferanceCode ($input){
	
	$sesli = "aeoöıiuüAEOÖIİUÜ";
	$search = array('Ç','ç','Ğ','ğ','Ş','ş',' ');
	$replace = array('C','c','G','g','S','s','');
	$input = str_replace($search,$replace,$input);
	$inputarray = str_split($input);
	//print_r($inputarray);
	
	for($i=1;$i<count($inputarray,COUNT_NORMAL);$i++){	
		
		if(strpos($special,$inputarray[$i])){
			$input = str_replace($inputarray[$i],'',$input);
			//echo $inputarray[$i];
			}
		if(strpos($sesli,$inputarray[$i])){
			$input = str_replace($inputarray[$i],'',$input);
			//echo $inputarray[$i];
			}
	}
	
	echo strtoupper($input);
}
?>