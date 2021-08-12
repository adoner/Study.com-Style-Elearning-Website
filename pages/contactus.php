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
    	<div class="contactus-1 section-image" style="background-image: url('assets/img/examples/city.jpg')">

		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2 class="title">İletişimde Kalın</h2>
					<h5 class="description">Daha fazla bilgiyemi ihtiyacınız var? Lütfen iletişime geçmekten çekinmeyin..</h5>
					<div class="info info-horizontal">
						<div class="icon icon-primary">
							<i class="material-icons">pin_drop</i>
						</div>
						<div class="description">
							<h4 class="info-title">Bizi ofisimizde ziyaret edin</h4>
							<p> Bld Mihail Kogalniceanu, nr. 8,<br>
								7652 Bucharest,<br>
								Romania
							</p>
						</div>
					</div>
					<div class="info info-horizontal">
						<div class="icon icon-primary">
							<i class="material-icons">phone</i>
						</div>
						<div class="description">
							<h4 class="info-title">Bize telefonla ulaşın</h4>
							<p> Michael Jordan<br>
								+40 762 321 762<br>
								Mon - Fri, 8:00-22:00
							</p>
						</div>
					</div>

				</div>
				<div class="col-md-5 col-md-offset-2">
					<div class="card card-contact">
						<form role="form" id="contact-form" name="contact-form" method="post" action="/process/contact">
							<div class="header header-raised header-primary text-center">
								<h4 class="card-title">Bize Ulaşın</h4>
							</div>
							<div class="card-content">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group label-floating">
											<label class="control-label">Adınız</label>
											<input type="text" name="name" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group label-floating">
											<label class="control-label">Soyadınız</label>
											<input type="text" name="name" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Eposta Adresiniz</label>
									<input type="email" name="email" class="form-control"/>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">Mesajınız</label>
									<textarea name="message" class="form-control" id="message" rows="6"></textarea>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="optionsCheckboxes">
												I'm not a robot
											</label>
										</div>
									</div>
									<div class="col-md-6">
										<button type="submit" class="btn btn-primary pull-right">Mesajı Gönder</button>
									</div>
								</div>
							</div>

						</form>
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
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRciJerchVAFfxJrpbYWEqpVNRmKPmXsw"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="../assets/js/material-kit.js?v=1.2.1" type="text/javascript"></script>
    <script type="text/javascript">
		$().ready(function(){

			materialKitDemo.initContactUs2Map();
		});
	</script>
</html>
