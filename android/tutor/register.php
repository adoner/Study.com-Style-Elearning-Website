<?php
$response = array();
include '../../includes/db_connect.php';
include '../../includes/functions.php';
 
//Get the input request parameters
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE); //convert JSON into array
 
//Check for Mandatory parameters
if(isset($input['username']) && isset($input['password']) && isset($input['full_name']) && isset($input['phone']) && isset($input['imagename']) && isset($input['lecture'])){
	$username = $input['username'];
	$password = $input['password'];
	$fullName = $input['full_name'];
	$phone = $input['phone'];
	$imagename = $input['imagename'];
	$lecture = $input['lecture'];
	$notfQrequest = 1;
	$notfGeneral = 1;
	
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

	$fullName = strtolower($fullName);
	$fullName = ucwords(chop($fullName, get_last_words(0,$fullName)))." ".strtoupper(get_last_words(0,$fullName));
	
	//Formatting phone number
	$phone = str_replace(' ', '',$phone);
	$result = substr($phone, 0, 1);
	if($result==0){
		
		$phone = $phone;
		
		}else{
			
			$phone = "0".$phone;
			
			}
	
	//Check if user already exist
	if(!userExistsTutor($username)){
 
		//Get a unique Salt
		$salt = getSalt();
		
		//Generate a unique password Hash
		$passwordHash = password_hash(concatPasswordWithSalt($password,$salt),PASSWORD_DEFAULT);
		
		//Query to register new user
		$insertQuery  = "INSERT INTO tutors(email, name, pass, salt, phone, lecture, notfQrequest, notfGeneral, certificate) VALUES (?,?,?,?,?,?,?,?,?)";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("sssssssss",$username,$fullName,$passwordHash,$salt,$phone,$lecture,$notfQrequest,$notfGeneral,$imagename);
			$stmt->execute();
			$qrysalt = $db->query("SELECT * FROM tutors ORDER BY ID DESC LIMIT 1")->fetch();
			$response["status"] = 0;
			$response["message"] = "Hesabınız oluşturuldu";
			$stmt->close();
		}
	}
	else{
		$response["status"] = 1;
		$response["message"] = "Bu kullanıcıadı zaten alınmış";
	}
}
else{
	$response["status"] = 2;
	$response["message"] = "Missing mandatory parameters";
}
echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>