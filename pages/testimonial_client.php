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
<div class="testimonials-2 section-dark">

		<div class="container">

			<div class="row">

				<div id="carousel-testimonial" class="carousel slide" data-ride="carousel">

					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="card card-testimonial card-plain">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="assets/img/faces/kendall.jpg" />
									</a>
								</div>

								<div class="card-content">
									<h5 class="card-description">"I speak yell scream directly at the old guard on behalf of the future. I gotta say at that time I’d like to meet Kanye I speak yell scream directly at the old guard on behalf of the future. My brother Chance!!! <br>Thank you for letting me work on this masterpiece. One of my favorite people."
									</h5>
									<h4 class="card-title">Kendall Thompson</h4>
									<h6 class="category text-muted">CEO @ Marketing Digital Ltd.</h6>
									<div class="footer">
										<i class="material-icons text-warning">star</i>
										<i class="material-icons text-warning">star</i>
										<i class="material-icons text-warning">star</i>
										<i class="material-icons text-warning">star</i>
										<i class="material-icons text-warning">star</i>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="card card-testimonial card-plain">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="assets/img/faces/christian.jpg" />
									</a>
								</div>

								<div class="card-content">
									<h5 class="card-description">"Thank you Anna for the invite thank you to the whole Vogue team Called I Miss the Old Kanye At the God's last game Chop up the soul Kanye. I promise I will never let the people down. I want a better life for all!!! Pablo Pablo Pablo Pablo! Thank you Anna for the invite thank you to the whole Vogue team."
									</h5>
									<h4 class="card-title">Christian Louboutin</h4>
									<h6 class="category text-muted">Designer @ Louboutin & Co.</h6>
									<div class="footer">
										<i class="material-icons text-warning">star</i>
										<i class="material-icons text-warning">star</i>
										<i class="material-icons text-warning">star</i>
										<i class="material-icons text-warning">star</i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<a class="left carousel-control" href="#carousel-testimonial" role="button" data-slide="prev">
						<i class="material-icons" aria-hidden="true">chevron_left</i>
					</a>
					<a class="right carousel-control" href="#carousel-testimonial" role="button" data-slide="next">
						<i class="material-icons" aria-hidden="true">chevron_right</i>
					</a>
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
