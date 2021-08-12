<!doctype html>
<html lang="tr">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sanal Tebeşir</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/>
    <!-- JS Files -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="../assets/js/custom.js"></script>
</head>

<body class="login-page">

<?php
session_start();
include("../includes/header.php");

?>

	<div class="page-header header-filter" style="background-image: url('../assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
					<div class="card card-signup">
						<form id="adminLoginForm" class="form" method="POST" action="../includes/islemler.php?task=adminLogin">
							<div class="header header-primary text-center">
								<h4 class="card-title">Yönetici Giriş</h4>
								<div class="social-line">
									<a href="#pablo" class="btn btn-just-icon btn-simple">
										<i class="fa fa-facebook-square"></i>
									</a>
									<a href="#pablo" class="btn btn-just-icon btn-simple">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="#pablo" class="btn btn-just-icon btn-simple">
										<i class="fa fa-google"></i>
									</a>
								</div>
							</div>
							<p class="description text-center">Veya Klasik Yolla</p>
							<div class="card-content">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">people</i>
									</span>
									<input type="text" name="login" class="form-control" placeholder="Kullanıcı adı...">
								</div>

								<div class="input-group">
									<span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
									<input type="password" name="password" placeholder="Şifre..." class="form-control" />
								</div>
							</div>
							<div class="footer text-center">
								<a href="#" id="adminLogin" class="btn btn-primary btn-simple btn-wd btn-lg">Başlayın</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		    <?php

include("../includes/footer.php");

?>

	</div>

</body>
	<!--   Core JS Files   -->
	<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js"></script>

	<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
	<script src="../assets/js/moment.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
	<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
	<script src="../assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
	<script src="../assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
	<script src="../assets/js/bootstrap-tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
	<script src="../assets/js/jasny-bootstrap.min.js"></script>

	<!--    Plugin For Google Maps   -->
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="../assets/js/material-kit.js?v=1.2.1" type="text/javascript"></script>
</html>
