<?php
session_start();
?>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll=" " id="sectionsNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
        <div style="position:relative; float:left; margin-top:-20px">
		<a class="navbar-brand" href="/"><img src="../assets/img/logo.png" height="60px" width="60px" /></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">work</i>KURUMSAL
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-with-icons">
                        <li>
                            <a href="/hakkimizda">
                                <i class="material-icons">info</i> Hakkımızda
                            </a>
                        </li>
                        <li>
                            <a href="/ekibimiz">
                                <i class="material-icons">people</i> Ekibimiz
                            </a>
                        </li>
                        <li>
                            <a href="/iletisim">
                                <i class="material-icons">contacts</i> İletişim
                            </a>
                        </li>
                        <li>
                            <a href="/yardim">
                                <i class="material-icons">help</i> Yardım
                            </a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="/#nasilcalisir">
                        <i class="material-icons">important_devices</i> Nasıl Çalışır?
                        
                    </a>
                </li>
                
                <li>
                    <a href="/students">
                        <i class="material-icons">face</i> Öğrencilerimiz
                        
                    </a>
                </li>
                
                <li>
                    <a href="/tutors">
                        <i class="material-icons">people</i> Eğitmenlerimiz
                    </a>
                </li>
<!--                
                <li>
                    <a href="http://blog.sanaltebesir.com">
                        <i class="material-icons">subject</i> Blog
                    </a>
                </li>-->
                
                <li>
                    <a href="/yardim">
                        <i class="material-icons">help</i> Yardım
                    </a>
                </li>
                <?php
					if(!$_SESSION["SESS_USER_ID"] or !$_SESSION["SESS_ADMIN_ID"]){ ?>
				<li>
                    <a href="/login">
                        <i class="material-icons">fingerprint</i> Giriş
                    </a>
                </li>
				<?php		
						}
					if($_SESSION["SESS_USER_ID"]){ ?>
				<li>
                    <a href="/studentpanel">
                        <i class="material-icons">person</i> <?php echo $_SESSION["SESS_USER_NAME"];?>
                    </a>
                </li>
				<?php		
						}

					if($_SESSION["SESS_ADMIN_ID"]){ ?>
				<li>
                    <a href="/adminpanel">
                        <i class="material-icons">person</i> <?php echo $_SESSION["SESS_ADMIN_NAME"];?>
                    </a>
                </li>
				<?php		
						}
				?>
				
                <li class="button-container">
                    <a href="/pricing" class="btn btn-rose btn-round">Paketlere Gözatın</a>
                </li>
            </ul>
        </div>
    </div>
</nav>