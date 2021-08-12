<?php
session_start();
//ini_set('display_errors', 1);
require_once("../../includes/auth.php");
require_once("../../includes/db.php");

$user = $db->query("SELECT * FROM customer_packages WHERE studentid = $_SESSION[SESS_USER_ID]")->fetch();
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/studentpanel/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/studentpanel/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sanal Tebeşir
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="/studentpanel/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
  <script type="text/javascript" src="../../assets/js/custom.js"></script>
<style>
.card-pricing{
	background-color:#FFF; 
	border-radius:8px; 
	box-shadow:4px 4px 4px #999999;
	padding:5px;
	width:240px;
	height:330px
	}
.card-content {
    padding: 15px 30px;
	text-align:center;
}
.card-title{
	font-weight: 700;
    font-family: "Roboto Slab", "Times New Roman", serif;
    font-size: 1.3em;
    text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
	}
.card-description{
    color: #999999;
	font-size:16px;
}
.category{
    position: relative;
    line-height:5;
	font-size:18px;
}
.card-footer{
	position:absolute;
	bottom:10px;
	}
</style>
</head>

<body>
<div class="wrapper ">
<?php
include("../includes/sidemenu.php");
?>
<div class="main-panel">
      <!-- Navbar -->
<?php
include("../includes/headernav.php");
?>
<!-- End Navbar -->
<div class="content">           
    <div class="row">
    <?php 
		if($user["packagename"]=="Deneme"){
			?>
        <form id="form1" method="post" action="/process/purchase">
        <div class="col-md-3">
            <div class="card-pricing">
                <div class="card-content">
                    <h6 class="category">Standart</h6>
           			<p class="card-description">
                        Ayda 50 soru sorma hakkı.
                    </p>
                    <h3 class="card-title">50 TL</h3>
                 <div class="card-footer"><a href="#" id="cartLogin" class="btn btn-white btn-round" >Hemen Başla</a></div>
                </div>
            </div>
        </div>
        <input type="hidden" name="packname" value="Standart"/>
        <input type="hidden" name="packprice" value="50"/>
        <input type="hidden" name="page" value="/payment"/>
        </form>
       <?php 
		}
		if($user["packagename"]=="Deneme" or $user["packagename"]=="Standart"){
		?>
        <form id="form2" method="post" action="/process/purchase">
        <div class="col-md-3">
            <div class="card-pricing">
                <div class="card-content">
                    <h6 class="category">Premıum</h6>
                    <p class="card-description">
                        Ayda 100 soru sorma hakkı.
                    </p>
                    <h3 class="card-title">100 TL</h3>
                   <div class="card-footer"><a href="#" class="btn btn-rose btn-round" id="cartLogin">Hemen Başla</a></div>
                </div>
            </div>
        </div>
        <input type="hidden" name="packname" value="Premium"/>
        <input type="hidden" name="packprice" value="100"/>
        <input type="hidden" name="page" value="/payment"/>
        </form>
        <?php 
		}
		if($user["packagename"]=="Deneme" or $user["packagename"]=="Standart" or $user["packagename"]=="Premium"){
		?>
        <form id="form3" method="post" action="/process/purchase">
        <div class="col-md-3">
            <div class="card-pricing">
                <div class="card-content">
                    <h6 class="category">Premıum Plus</h6>
                    <p class="card-description">
                        Ayda 300 soru sorma hakkı.
                    </p>
                    <h3 class="card-title">300 TL</h3>
                    <div class="card-footer"><a href="#" class="btn btn-white btn-round" id="cartLogin">Hemen Başla</a></div>
                </div>
            </div>
        </div>
        <input type="hidden" name="packname" value="Premium Plus"/>
        <input type="hidden" name="packprice" value="300"/>
        <input type="hidden" name="page" value="/payment"/>
        </form>
        <?php 
		}
		if($user["packagename"]=="Deneme" or $user["packagename"]=="Standart" or $user["packagename"]=="Premium" or $user["packagename"]=="Premium Plus"){
		?>
        <form id="form4" method="post" action="/process/purchase">
        <div class="col-md-3">
            <div class="card-pricing">
                <div class="card-content">
                    <h6 class="category">Ultımate</h6>
                    <p class="card-description">
                        Ayda 500 soru sorma hakkı.
                    </p>
                    <h3 class="card-title">500 TL</h3>
                    <div class="card-footer"><a href="#" class="btn btn-white btn-round" id="cartLogin">Hemen Başla</a></div>
                </div>
            </div>
        </div>
        <input type="hidden" name="packname" value="Ultimate"/>
        <input type="hidden" name="packprice" value="500"/>
        <input type="hidden" name="page" value="/payment"/>
        </form>
        <?php 
		}
		if($user["packagename"]=="Ultimate"){
		?>
        <div style="position:relative; float:none; margin:0 auto"><p style="text-align:center; font-size:24px; font-weight:bold">Size önerebileceğimiz daha üst bir paketimiz bulunmamaktadır.</p></div>
        <?php 
		}
		?>
</div>
</div>
</div>
</div>
  <!--   Core JS Files   -->
  <script src="/studentpanel/assets/js/core/jquery.min.js"></script>
  <script src="/studentpanel/assets/js/core/popper.min.js"></script>
  <script src="/studentpanel/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="/studentpanel/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="/studentpanel/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="/studentpanel/assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="/studentpanel/assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="/studentpanel/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="/studentpanel/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="/studentpanel/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="/studentpanel/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="/studentpanel/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="/studentpanel/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="/studentpanel/assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="/studentpanel/assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/studentpanel/assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="/studentpanel/assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="/studentpanel/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="/studentpanel/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/studentpanel/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="/studentpanel/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>
