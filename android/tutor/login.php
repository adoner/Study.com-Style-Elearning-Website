<?php 
session_start();
$response = array();
include '../../includes/db_connect.php';
include '../../includes/functions.php';

//Get the input request parameters
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE); //convert JSON into array
 
//Check for Mandatory parameters
if(isset($input['username']) && isset($input['password'])){
	$username = $input['username'];
	$password = $input['password'];
	$query    = "SELECT id, name, pass, salt FROM tutors WHERE email = ?";
 
	if($stmt = $con->prepare($query)){
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt->bind_result($userid,$fullName,$passwordHashDB,$salt);
		if($stmt->fetch()){
			//Validate the password
			if(password_verify(concatPasswordWithSalt($password,$salt),$passwordHashDB)){
				$response["status"] = 0;
				$response["message"] = "Giriş başarılı";
				$response["name"] = $fullName;
				$response["userid"] = $userid;
			}
			else{
				$response["status"] = 1;
				$response["message"] = "Geçersiz kullanıcıadı veya şifre kombinasyonu";
			}
		}
		else{
			$response["status"] = 1;
			$response["message"] = "Geçersiz kullanıcıadı ve şifre kombinasyonu";
		}
		
		$stmt->close();
	}
}
else{
	$response["status"] = 2;
	$response["message"] = "Missing mandatory parameters";
}
//Display the JSON response
echo json_encode($response,JSON_UNESCAPED_UNICODE);

?>