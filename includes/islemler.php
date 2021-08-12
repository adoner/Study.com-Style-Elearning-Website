<?php
ob_start();
session_start();
include("db.php");
include ("db_connect.php");
include("functions.php");
//require_once("class.phpmailer.php");
//require_once("SimpleImage.php");
$task = $_GET['task'];

if($task=='studentLogin'){
		
		if($_POST['login']=="" or $_POST['password']==""){
			
			header("location:/login");
			
			}				
	
		if(isset($_POST['login']) && isset($_POST['password'])) {
			
			$username =$_POST['login'];
			$password = $_POST['password'];
			$query    = "SELECT id, name, pass, salt FROM students WHERE email = ?";
			
			
			if($stmt = $con->prepare($query)){
				$stmt->bind_param("s",$username);
				$stmt->execute();
				$stmt->bind_result($userid,$fullName,$passwordHashDB,$salt);
				if($stmt->fetch()){
					//Validate the password
					if(password_verify(concatPasswordWithSalt($password,$salt),$passwordHashDB)){
						
						session_regenerate_id();
						$_SESSION['SESS_USER_ID'] = $userid;
						$_SESSION['SESS_USER_NAME'] = $fullName;;
						session_write_close();
					
						header("location: /studentpanel"."$_SESSION[page]");		
						exit();
					}
					else{
						header("location: /login");
						exit();
					}
				}
				else{

					echo"Geçersiz kullanıcıadı ve şifre kombinasyonu";
				}
		
				$stmt->close();
			}		
		}
}

if($task=='adminLogin'){
	
	if($_POST){
		
		if($_POST['login']=="" or $_POST['password']==""){
			
			header("location:/adminlogin");
			
			}
						
	$member=$db->query("SELECT * FROM admin WHERE login='".$_POST['login']."' AND pass='".md5($_POST['password'])."'")->fetch();
	$qry=$db->query("SELECT COUNT(*) as num FROM admin WHERE login='".$_POST['login']."' AND pass='".md5($_POST['password'])."'");
	$rows = $qry->fetchColumn();
	
		if($rows==1) {

					session_regenerate_id();
					$_SESSION['SESS_ADMIN_ID'] = $member['id'];
					$_SESSION['SESS_ADMIN_NAME'] = $member['name'];
					session_write_close();
				
					header("location: /adminpanel");		
					exit();
				
				}else {
					header("location: /adminlogin");
					exit();
		}
	}
	
}

if($task=='purchase'){
	
	$_SESSION["packname"] = $_POST["packname"];
	$_SESSION["packprice"] = $_POST["packprice"];
	$_SESSION["page"] = $_POST["page"];
	
	if($_SESSION["SESS_USER_ID"]){
		
		header("location: /studentpanel/payment");		
		exit();
		
		}
	if(!$_SESSION["SESS_USER_ID"]){
		
		header("location: /login");		
		exit();
		
		}
		
	}
	
	if($task=='profilGuncelle'){
		
		$name = $_POST["name"];
		$email = $_POST["email"];
		$grade = $_POST["grade"];
		$il = $_POST["il"];
		$dogum = $_POST["dogum"];
 
		$date = str_replace('/', '-', $dogum );
		$newDate = date("Y-m-d ", strtotime($date));

		$qry = $db->query("UPDATE users SET name = '$name', birthdate = '$newDate', email = '$email', city = '$il', class = '$grade' WHERE id = '$_SESSION[SESS_USER_ID]'");

		if($qry){
			
			header("location: /studentpanel/studentuser");		
			exit();
		
			}
		}
		
if($task=='sayfaekle'){
	
	$menuadi = $_POST["title"];
	$rank = $_POST["rank"];
	$menuseo = seo($menuadi);
	$icerik = $_POST["txtCkeditor"];
	$kayit_tarihi = date("Y-m-d");
	
	$qry = $db->query("INSERT INTO content (title, contentbody, seo, tarih, ranking) VALUES ('$menuadi','$icerik','$menuseo','$kayit_tarihi','$rank')");
	
	if($qry){
		
		header("location: /adminpanel");
		
		}
	
}
	
if($task=='message'){
	
	$usertype = $_POST["user"];
	$title = $_POST["title"];
	$body = $_POST["messagebody"];
	$today = date("Y-m-d H:i:s");
	
	if($usertype=="student"){
		
		$tablename="studentmessages";
		$sql = $db->query("SELECT * FROM students");
	}
	if($usertype=="tutor"){
		$tablename="tutormessages";
		$sql = $db->query("SELECT * FROM tutors");
	}
	foreach($sql as $user){
		
		$qry = $db->query("INSERT INTO ".$tablename."(userid, title, body, messagedate) VALUES ('$user[id]','$title','$body','$today')");
		
	}

	header("location: /adminpanel/messages");

}
?>