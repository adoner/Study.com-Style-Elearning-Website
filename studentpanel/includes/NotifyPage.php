<?php
session_start();
$mySecretKey= 'secretKEy';
$status		= $_POST["status"];
$errorCode	= $_POST["errorCode"];
$errorDesc	= $_POST["errorDesc"];
$syncId		= $_POST["syncId"];
$price		= $_POST["price"];
$operatorId	= $_POST["operatorId"];
$secretKey	= $_POST["secretKey"];
$date		= date("Y:m:d H:i:s");

//SecretKey tanımlamalarla birlikte verilecektir
if($secretKey == $mySecretKey) {
    if ($status == 1)
	{
		// Log success
	}
	else
	{
		// Log error
	}
	echo 'OK';
}
else
{
	echo 'Error!';
}
?>