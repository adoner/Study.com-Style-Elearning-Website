<?php
session_start();
require_once("../includes/db.php");

$sql = $db->query("SELECT * FROM packages");

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

<body class="pricing">
<?php

include("../includes/header.php");

?>

	<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('../assets/img/bg2.jpg');">
		<div class="container">
    		<div class="row">
        		<div class="col-md-8 col-md-offset-2">
                    <h1 class="title">Hadi Artık Soruları Kime Soracağım Diye Düşünme</h1>
                    <h4>Başlamak için sana uygun bir paketi seç ve kullanmaya başla.</h4>
                </div>
            </div>
        </div>
	</div>

	<div class="main main-raised">
		<div class="container">
            <div class="cd-section" id="pricing">
	<!--     *********    PRICING 1     *********      -->

	<div class="pricing-1">

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<h2 class="title">Senin için en uygun paketi seç.</h2>
					<h5 class="description"><!--You have Free Unlimited Updates and Premium Support on each package.--></h5>
					<div class="section-space"></div>
				</div>
			</div>

			<div class="row">
            <?php
			$i=1;
			foreach($sql as $package){?>
				<form id="form<?php echo $i;?>" method="post" action="/process/purchase">
				<div class="col-md-3">
					<div class="card card-pricing card-plain">
						<div class="card-content">
							<h6 class="category"><?php echo $package["packagename"];?></h6>
							<div class="icon">
								<i class="material-icons">weekend</i>
							</div>
							<h3 class="card-title"><?php echo $package["price"];?> TL/Ay</h3>
							<p class="card-description">
								<?php echo $package["about"];?>
							</p>
							<a href="#" id="cartLogin" class="btn btn-white btn-round" >Hemen Başla</a>
						</div>
					</div>
				</div>
                <input type="hidden" name="packname" value="Standart"/>
                <input type="hidden" name="packprice" value="<?php echo $package["price"];?>"/>
                <input type="hidden" name="page" value="/payment"/>
				</form>
               <?php 
			   $i++;
			   }?>
       <!--         <form id="form2" method="post" action="/process/purchase">
				<div class="col-md-3">
					<div class="card card-pricing card-raised">
						<div class="card-content">
							<h6 class="category">Premıum</h6>
							<div class="icon icon-rose">
								<i class="material-icons">home</i>
							</div>
							<h3 class="card-title">100 TL/Ay</h3>
							<p class="card-description">
								This is good if your company size is between 2 and 10 Persons.
							</p>
							<a href="#" class="btn btn-rose btn-round" id="cartLogin">Hemen Başla</a>
						</div>
					</div>
				</div>
                <input type="hidden" name="packname" value="Premium"/>
                <input type="hidden" name="packprice" value="100"/>
                <input type="hidden" name="page" value="/payment"/>
                </form>
				<form id="form3" method="post" action="/process/purchase">
				<div class="col-md-3">
					<div class="card card-pricing card-plain">
						<div class="card-content">
							<h6 class="category">Premıum Plus</h6>
							<div class="icon">
								<i class="material-icons">business</i>
							</div>
							<h3 class="card-title">300 TL/Ay</h3>
							<p class="card-description">
								This is good if your company size is between 11 and 99 Persons.
							</p>
							<a href="#" class="btn btn-white btn-round" id="cartLogin">Hemen Başla</a>
						</div>
					</div>
				</div>
                <input type="hidden" name="packname" value="Premium Plus"/>
                <input type="hidden" name="packprice" value="300"/>
                <input type="hidden" name="page" value="/payment"/>
                </form>
				<form id="form4" method="post" action="/process/purchase">
				<div class="col-md-3">
					<div class="card card-pricing card-plain">
						<div class="card-content">
							<h6 class="category">Ultımate</h6>
							<div class="icon">
								<i class="material-icons">account_balance</i>
							</div>
							<h3 class="card-title">500 TL/Ay</h3>
							<p class="card-description">
								This is good if your company size is 99+ persons.
							</p>
							<a href="#" class="btn btn-white btn-round" id="cartLogin">Hemen Başla</a>
						</div>
					</div>
				</div>
                <input type="hidden" name="packname" value="Ultimate"/>
                <input type="hidden" name="packprice" value="500"/>
                <input type="hidden" name="page" value="/payment"/>
				</form>-->
			</div>

		</div>
	</div>

	<!--     *********    END PRICING 1      *********      -->
	</div>
            <hr />
            <div class="features-2">
                <div class="text-center">
                    <h3 class="title">Paketlerle İlgili Merak Ettikleriniz</h3>
                </div>
                <div class="row">
    				<div class="col-md-4 col-md-offset-2">
    		           	<div class="info info-horizontal">
    						<div class="icon icon-info">
    							<i class="material-icons">card_membership</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">Can I cancel my subscription?</h4>
    							<p>Yes, you can cancel and perform other actions on your subscriptions via the My Account page. </p>
    						</div>
    		        	</div>

    		        </div>

    				<div class="col-md-4">
    					<div class="info info-horizontal">
    						<div class="icon icon-success">
    							<i class="material-icons">card_giftcard</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">Is there any discount for an annual subscription?</h4>
    							<p>Yes, we offer a 40% discount if you choose annual subscription for any plan.</p>
    						</div>
    					</div>
    				</div>
                </div>
                <div class="row">
    				<div class="col-md-4 col-md-offset-2">
    		           	<div class="info info-horizontal">
    						<div class="icon icon-success">
    							<i class="material-icons">attach_money</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">Which payment methods do you take?</h4>
    							<p>WooCommerce comes bundled with PayPal (for accepting credit card and PayPal account payments), BACS, and cash on delivery for accepting payments. </p>
    						</div>
    		        	</div>

    		        </div>

    				<div class="col-md-4">
    					<div class="info info-horizontal">
    						<div class="icon icon-rose">
    							<i class="material-icons">question_answer</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">Any other questions we can answer?</h4>
    							<p>We are happy to help you. Contact us.</p>
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
