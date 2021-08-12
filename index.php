<?php
session_start();
?>
<!doctype html>
<html lang="tr">
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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/assets-for-demo/vertical-nav.css" rel="stylesheet" />
	<link href="assets/assets-for-demo/demo.css" rel="stylesheet" />
<style type="text/css">
/*Rules for sizing the icon*/
.material-icons.md-18 { font-size: 18px; }
.material-icons.md-24 { font-size: 24px; }
.material-icons.md-36 { font-size: 36px; }
.material-icons.md-48 { font-size: 48px; }
</style>
</head>

<body class="index-page">

<?php
require_once("includes/header.php");
?>
<div class="page-header header-small" data-parallax="true" style="background-color:#09F; margin-top:15px">
    <div class="container">
    <div style="text-align:center; margin-top:-100px; margin-bottom:80px">
        <div style="display:inline-block;">
            <span style=" font-size:26px; font-weight:bold; font-family:BrandonGrotesque, Lato, sans-serif;">Cevaplara Ulaşmanın En Teknolojik Yolu</span><br><br>
             <span style=" font-size:18px; font-weight:500; font-family:BrandonGrotesque, Lato, sans-serif;">YKS, LGS, KPSS ve ALES sınavlarına hazırlanan öğrencilerin en teknolojik dostu.<br>
    Sorunun fotoğrafını çek, gönder, ayrıntılı çözüm hemen telefonuna gelsin.</span>
        </div>
      <div style="margin-bottom:-80px"><img src="assets/img/student.png" height="361" width="600"/></div>
</div> 
</div>
</div>
       
<div class="main main-raised">
<div style="padding:20px; color:#000">
<p style="font-size:24px; color:#000; text-align:center; font-weight:bold">NEDEN SANAL TEBEŞİR?</p>
<table align="center" cellpadding="15px" cellspacing="35px" style="margin-top:50px" width="95%">
<tr"><td>
<p style="text-align:center">
<i class="material-icons md-48">work_outline</i></p>
<p style="text-align:center; font-size:18px">Yüzlerce Eğitmen</p>
<p style="text-align:center; font-size:14px;color:#666">Profesyonel eğitmenlerden kaliteli ve güvenilir çözümler</p>
</td>
<td style="width:250px; height:100px">
<p style="text-align:center">
<i class="material-icons md-48">alarm</i></p>
<p style="text-align:center; font-size:18px">15 Dakika İçinde Çözüm Garantisi</p>
<p style="text-align:center; font-size:14px;color:#666">Hızlı destek ile takıldığın tüm soruların cevabı telefonunda</p>
</td>
<td style="width:250px; height:100px">
<p style="text-align:center">
<i class="material-icons md-48">money</i></p>
<p style="text-align:center; font-size:18px">Öğrenci Dostu Fiyatlar</p>
<p style="text-align:center; font-size:14px;color:#666">Bir saatlik özel ders fiyatının yarısına tüm ay boyunca yüzlerce soru sorun</p>
</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td style="width:250px; height:100px">
<p style="text-align:center">
<i class="material-icons md-48">assignment</i></p>
<p style="text-align:center; font-size:18px">Garantili Çözüm</p>
<p style="text-align:center; font-size:14px;color:#666">Tek bir platformda 13 farklı dersten sorulara %100 ayrıntılı çözümler</p>
</td>
<td style="width:250px; height:100px">
<p style="text-align:center">
<i class="material-icons md-48">library_books</i></p>
<p style="text-align:center; font-size:18px">Milyonlarca Soru</p>
<p style="text-align:center; font-size:14px;color:#666">Soru bankamızdan dilediğin zorluk seviyesine göre soru ve çözümlere erişim</p>
</td>
<td style="width:250px; height:100px">
<p style="text-align:center">
<i class="material-icons md-48">live_help</i></p>
<p style="text-align:center; font-size:18px">Rehberlik Hizmeti</p>
<p style="text-align:center; font-size:14px; color:#666">Eğitim koçlarımızla birebir iletişim olanağı ile profesyonel destek</p>
</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td></tr>
</table>
</div>

<section id="nasilcalisir">
<div class="container">
<p style="font-size:24px; color:#000; text-align:center; font-weight:bold">NASIL ÇALIŞIR?</p>
<table>
<tr><td><img src="assets/img/how-01.png" width="200px" height="200px"/></td><td><img src="assets/img/dot.png" width="65px" height="50px"/></td><td><img src="assets/img/how-02.png" width="200px" height="200px"/></td><td><img src="assets/img/dot.png" width="65px" height="50px"/></td><td><img src="assets/img/how-03.png" width="200px" height="200px"/></td><td><img src="assets/img/dot.png" width="65px" height="50px"/></td><td><img src="assets/img/how-04.png" width="200px" height="200px"/></td><td><img src="assets/img/dot.png" width="65px" height="50px"/></td><td><img src="assets/img/how-05.png" width="200px" height="200px"/></td></tr>
<tr><td><p style="text-align:center; font-size:14px; color:#666">Sorunun fotoğrafını çek</p></td><td>&nbsp;</td><td><p style="text-align:center; font-size:14px; color:#666">Dersini seç ve gönder</p></td><td>&nbsp;</td><td><p style="text-align:center; font-size:14px; color:#666">Ayrıntılı ve açıklamalı çözüm<br> cebine gelsin</p></td><td>&nbsp;</td><td><p style="text-align:center; font-size:14px; color:#666">Çözüm kalitesini puanla</p></td><td>&nbsp;</td><td><p style="text-align:center; font-size:14px; color:#666">Anlayamadığın kısımlar için<br> detaylı açıklama iste</p></td></tr>
<tr><td colspan="9">&nbsp;</td></tr>
<tr><td colspan="9">&nbsp;</td></tr>
<tr><td colspan="9">&nbsp;</td></tr>
</table>
</div>
</section>
</div>



<?php

include("includes/footer.php");

?>
</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="assets/js/moment.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
	<script src="assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="assets/js/bootstrap-tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="assets/js/jasny-bootstrap.min.js"></script>

	<!-- Plugin For Google Maps -->
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>



	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js?v=1.2.1" type="text/javascript"></script>

	<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
	<script src="assets/assets-for-demo/modernizr.js" type="text/javascript"></script>
	<script src="assets/assets-for-demo/vertical-nav.js" type="text/javascript"></script>

	<script type="text/javascript">

		$(document).ready(function(){
			var slider = document.getElementById('sliderRegular');

	        noUiSlider.create(slider, {
	            start: 40,
	            connect: [true,false],
	            range: {
	                min: 0,
	                max: 100
	            }
	        });

	        var slider2 = document.getElementById('sliderDouble');

	        noUiSlider.create(slider2, {
	            start: [ 20, 60 ],
	            connect: true,
	            range: {
	                min:  0,
	                max:  100
	            }
	        });
			
			materialKit.initFormExtendedDatetimepickers();

		});
	</script>
</html>
