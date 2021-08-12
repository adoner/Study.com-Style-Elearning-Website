<?php
session_start();
require_once("../includes/auth.php");
function getAddress() {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}
$uRl = getAddress();

?>
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
<div class="logo">
<a href="http://www.sanaltebesir.com" class="simple-text logo-normal">
  Sanal Tebeşir
</a>
</div>
<div class="sidebar-wrapper">
<ul class="nav">
  <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/adminpanel"){echo "active";}?>">
    <a class="nav-link" href="/adminpanel">
      <i class="material-icons">dashboard</i>
      <p>Dashboard</p>
    </a>
  </li>
  <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/adminpanel/students"){echo "active";}?>">
    <a class="nav-link" href="/adminpanel/students">
      <i class="material-icons">person</i>
      <p>Öğrenciler</p>
    </a>
  </li>
    <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/adminpanel/tutors"){echo "active";}?>">
    <a class="nav-link" href="/adminpanel/tutors">
      <i class="material-icons">library_books</i>
      <p>Eğitmenler</p>
    </a>
  </li>
    <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/adminpanel/orders"){echo "active";}?>">
    <a class="nav-link" href="/adminpanel/orders">
      <i class="material-icons">account_balance_wallet</i>
      <p>Siparişler</p>
    </a>
  </li>
  <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/adminpanel/messages"){echo "active";}?>">
    <a class="nav-link" href="/adminpanel/messages">
      <i class="material-icons">account_balance_wallet</i>
      <p>Mesaj-Bildirim</p>
    </a>
  </li>
    <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/adminpanel/packages"){echo "active";}?>">
    <a class="nav-link" href="/adminpanel/packages">
      <i class="material-icons">account_balance_wallet</i>
      <p>Paketler</p>
    </a>
  </li>
  <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/adminpanel/menus"){echo "active";}?>">
    <a class="nav-link" href="/adminpanel/menus">
      <i class="material-icons">library_books</i>
      <p>Sayfalar ve Menüler</p>
    </a>
  </li>

  <li class="nav-item ">
    <a class="nav-link" href="/adminlogout">
      <i class="material-icons">exit_to_app</i>
      <p style="color:#F00">Çıkış</p>
    </a>
  </li></ul>
</div></div>