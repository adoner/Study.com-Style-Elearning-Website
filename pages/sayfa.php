<?php
session_start();
require_once('../includes/db.php');
$seo=$_GET['p'];
$sql=$db->query("select * from content where seo='$seo'")->fetch();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sanal Tebeşir</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/>
</head>

<body>

<!-- Navbar will come here -->
<?php

include("../includes/header.php");

?>
<!-- end navbar -->
<div class="wrapper">
	<div class="header">
        <h1 class="title"><p style="padding:20px 10px 20px 40px; color:#000; margin-bottom:50px; font-size:34px"><?php echo $sql['title'];?> </p></h1>
	</div>
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main main-raised">
		<div class="container">
        <p style="text-align:justify; padding:20px; color:#000">
			<?php 		
			if($sql['contentbody']==""){
			
				echo "<p align='center'><img src='../assets/img/image_placeholder.jpg'/></p>";
			
			}else{
			
				echo $sql['contentbody'];
			}		
			?>
         </p>   
		</div>
	</div>
</div>
<?php

include("../includes/footer.php");

?>
</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
	<script src="assets/js/moment.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
	<script src="assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
	<script src="assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
	<script src="assets/js/bootstrap-tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
	<script src="assets/js/jasny-bootstrap.min.js"></script>

	<!--    Plugin For Google Maps   -->
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>


	

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="assets/js/material-kit.js?v=1.2.1" type="text/javascript"></script>

</html>
