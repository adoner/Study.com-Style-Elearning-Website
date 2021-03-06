<?php
session_start();
require_once("../includes/auth.php");
require_once("../../includes/db.php");
//echo $_SESSION['SESS_USER_ID'];
$user = $db->query("SELECT * FROM admin WHERE id = $_SESSION[SESS_ADMIN_ID]")->fetch();

?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/adminpanel/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/adminpanel/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sanal Tebeşir
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="/adminpanel/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/adminpanel/assets/demo/demo.css" rel="stylesheet" />
  <!-- JS Files -->
</head>

<body class="">
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Profil Bilgileri</h4>
                  <p class="card-category">Profilinizi Düzenleyin</p>
                </div>
                <div class="card-body">
                  <form name="profilForm" method="post" action="/process/profilGuncelle">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Adı Soyadı</label>
                          <input type="text" class="form-control" value="<?php echo $user['name'];?>" id="name" name="name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="email">Eposta Adresi</label>
                          <input type="email" class="form-control" value="<?php echo $user['email'];?>" id="email" name="email">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Sınıfı</label>
                          <select class="select form-control" data-style="btn btn-link" name="grade">
                          <option value="5.Sınıf" <?php if($user['class']=="5.Sınıf"){echo "selected=selected";} ?>>5.Sınıf</option>
                          <option value="6.Sınıf" <?php if($user['class']=="6.Sınıf"){echo "selected=selected";} ?>>6.Sınıf</option>
                          <option value="7.Sınıf" <?php if($user['class']=="7.Sınıf"){echo "selected=selected";} ?>>7.Sınıf</option>
                          <option value="8.Sınıf" <?php if($user['class']=="8.Sınıf"){echo "selected=selected";} ?>>8.Sınıf</option>
                          <option value="9.Sınıf" <?php if($user['class']=="9.Sınıf"){echo "selected=selected";} ?>>9.Sınıf</option>
                          <option value="10.Sınıf" <?php if($user['class']=="10.Sınıf"){echo "selected=selected";} ?>>10.Sınıf</option>
                          <option value="11.Sınıf" <?php if($user['class']=="11.Sınıf"){echo "selected=selected";} ?>>11.Sınıf</option>
                          <option value="12.Sınıf" <?php if($user['class']=="12.Sınıf"){echo "selected=selected";} ?>>12.Sınıf</option>
                          <option value="Mezun" <?php if($user['class']=="Mezun"){echo "selected=selected";} ?>>Mezun</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Şehir</label>
                           <?php
							$sql = $db->query("SELECT * FROM il ORDER BY id ASC", PDO::FETCH_ASSOC);
							?>
                       <select name="il" class="select form-control" data-style="btn btn-link">
                          <option>Lütfen Seçiniz...</option>
                          <?php
							foreach($sql as $row){
					
                    			?>	
                    			<option value="<?php echo $row['il_adi'];?>" <?php if($user['city']==$row['il_adi']){echo "selected=selected";} ?>><?php echo $row['il_adi'];?></option>
                   			 <?php
                					}
            					?>
                          </select>
                        </div>
                      </div>
                      
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="tel">Telefon</label>
                          <input type="text" class="form-control" value="<?php echo $user['tel'];?>" id="tel" disabled>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Doğum Tarihi</label>
                          <input name="dogum" type="text" class="form-control" placeholder="GG/AA/YYYY" 
                          value="<?php echo date("d/m/Y", strtotime($user['birthdate']));?>"/>
                        </div>
                    </div>
                    
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Profili Güncelle</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title"><?php echo $user['name'];?></h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            <?php
include("../includes/footer.php");
?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="/adminpanel/assets/js/core/jquery.min.js"></script>
  <script src="/adminpanel/assets/js/core/popper.min.js"></script>
  <script src="/adminpanel/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="/adminpanel/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="/adminpanel/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="/adminpanel/assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="/adminpanel/assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="/adminpanel/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="/adminpanel/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="/adminpanel/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="/adminpanel/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="/adminpanel/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="/adminpanel/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="/adminpanel/assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="/adminpanel/assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/adminpanel/assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="/adminpanel/assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="/adminpanel/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="/adminpanel/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/adminpanel/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="/adminpanel/assets/demo/demo.js"></script>
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
