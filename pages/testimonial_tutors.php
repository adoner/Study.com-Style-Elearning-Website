<?php
session_start();

?>
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

<body>
<?php

include("../includes/header.php");

?>
<div class="testimonials-1 section-image" style="background-image: url('assets/img/dg2.jpg')">

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h2 class="title">Our Clients Love Us</h2>
					<h5 class="description">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</h5>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="card card-testimonial">
						<div class="icon">
							<i class="material-icons">format_quote</i>
						</div>
						<div class="card-content">
							<h5 class="card-description">
								Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love the color mixtures, cards... everything. Keep up the great work!
							</h5>
						</div>

						<div class="footer">
							<h4 class="card-title">Alec Thompson</h4>
							<h6 class="category">@alecthompson</h6>
							<div class="card-avatar">
								<a href="#pablo">
									<img class="img" src="assets/img/faces/card-profile1-square.jpg" />
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card card-testimonial">
						<div class="icon">
							<i class="material-icons">format_quote</i>
						</div>
						<div class="card-content">
							<h5 class="card-description">
								"Don't be scared of the truth because we need to restart the human foundation in truth. That's why I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is not so attractive"
							</h5>
						</div>

						<div class="footer">
							<h4 class="card-title">Gina Andrew</h4>
							<h6 class="category">@ginaandrew</h6>
							<div class="card-avatar">
								<a href="#pablo">
									<img class="img" src="assets/img/faces/card-profile4-square.jpg" />
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card card-testimonial">
						<div class="icon">
							<i class="material-icons">format_quote</i>
						</div>
						<div class="card-content">
							<h5 class="card-description">
								"Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love the color mixtures, cards... everything. Keep up the great work!"
							</h5>
						</div>

						<div class="footer">
							<h4 class="card-title">George West</h4>
							<h6 class="category">@georgewest</h6>
							<div class="card-avatar">
								<a href="#pablo">
									<img class="img" src="assets/img/faces/card-profile2-square.jpg" />
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
<?php

include("../includes/footer.php");

?>


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
