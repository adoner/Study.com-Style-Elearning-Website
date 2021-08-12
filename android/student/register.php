<?php
$response = array();
include '../../includes/db_connect.php';
include '../../includes/db.php';
include '../../includes/functions.php';
 
//Get the input request parameters
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE); //convert JSON into array
 
//Check for Mandatory parameters
if(isset($input['username']) && isset($input['password']) && isset($input['full_name']) && isset($input['phone']) && isset($input['classe']) && isset($input['orderkey'])){
	$username = $input['username'];
	$password = $input['password'];
	$fullName = $input['full_name'];
	$phone = $input['phone'];
	$classe = $input['classe'];
	$orderkey = $input['orderkey'];
	
	$status = "1";
	$notfSolution = 1;
	$notfCampaign = 1;
	$notfGeneral = 1;
	$startdate = date('Y-m-d H:i:s');
	$mod_date = strtotime($startdate."+5days");
	$finishdate = "2020-01-01 00:00:00"; //date("Y-m-d H:i:s",$mod_date);
	
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
	if(!userExists($username)){
 
		//Get a unique Salt
		$salt = getSalt();
		
		//Generate a unique password Hash
		$passwordHash = password_hash(concatPasswordWithSalt($password,$salt),PASSWORD_DEFAULT);
		
		//Query to register new user
		$insertQuery  = "INSERT INTO students(email, name, pass, salt, tel, class, orderkey, status, notfSolution, notfCampaign, notfGeneral) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("sssssssssss",$username,$fullName,$passwordHash,$salt,$phone,$classe,$orderkey,$status,$notfSolution,$notfCampaign,$notfGeneral);
			$stmt->execute();
			$response["status"] = 0;
			$response["message"] = "Hesabınız oluşturuldu";
			$stmt->close();
		
		}
		
		$sql = $db->query("SELECT * FROM students WHERE orderkey = '$orderkey'")->fetch();
		$qry = $db->query("INSERT INTO customer_packages (studentid, packagename, questionlimit, status, price, startdate, finishdate) VALUES ('$sql[id]','Deneme Paketi','50','1','0','$startdate','$finishdate')");
			
	}
	else{
		$response["status"] = 1;
		$response["message"] = "Bu kullanıcıadı mevcut";
	}
	
}else{
	$response["status"] = 2;
	$response["message"] = "Missing mandatory parameters";
}
echo json_encode($response,JSON_UNESCAPED_UNICODE);
?>