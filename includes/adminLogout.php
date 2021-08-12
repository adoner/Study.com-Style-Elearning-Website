<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_ADMIN_ID']);
	unset($_SESSION['SESS_ADMIN_NAME']);
	
	header("location:/adminlogin");
?>
