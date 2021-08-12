<?php
session_start();
require_once("../../includes/auth.php");

function getAddress() {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}
$uRl = getAddress();
?>
<div class="sidebar" data-color="purple" data-background-color="white" data-image="/studentpanel/assets/img/sidebar-1.jpg">
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
  <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/studentpanel"){echo "active";}?>">
    <a class="nav-link" href="/studentpanel">
      <i class="material-icons">dashboard</i>
      <p>Dashboard</p>
    </a>
  </li>
  <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/studentpanel/studentuser"){echo "active";}?>">
    <a class="nav-link" href="/studentpanel/studentuser">
      <i class="material-icons">person</i>
      <p>Profil Bilgileri</p>
    </a>
  </li>
  <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/studentpanel/statistics"){echo "active";}?>">
    <a class="nav-link" href="/studentpanel/statistics">
      <i class="material-icons">content_paste</i>
      <p>Kullanım İstatistikleri</p>
    </a>
  </li>
  <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/studentpanel/question_answer"){echo "active";}?>">
    <a class="nav-link" href="/studentpanel/question_answer">
      <i class="material-icons">question_answer</i>
      <p>Soru Kutusu</p>
    </a>
  </li>
  <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/studentpanel/membership"){echo "active";}?>">
    <a class="nav-link" href="/studentpanel/membership">
      <i class="material-icons">library_books</i>
      <p>Üyelik Paketleri</p>
    </a>
  </li>
  <li class="nav-item <?php if($uRl=="http://www.sanaltebesir.com/studentpanel/account"){echo "active";}?>">
    <a class="nav-link" href="/studentpanel/account">
      <i class="material-icons">account_balance_wallet</i>
      <p>Hesabım</p>
    </a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="/logout">
      <i class="material-icons">exit_to_app</i>
      <p style="color:#F00">Çıkış</p>
    </a>
  </li>
  <div class="dropdown-divider"></div>
  <li class="nav-item ">
    <a class="nav-link" href="/kullanimsartlari">
      <i class="material-icons">info</i>
      <p>Kullanım Şartları</p>
    </a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="/gizlilikilkeleri">
      <i class="material-icons">info</i>
      <p>Gizlilik İlkeleri</p>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/sss">
      <i class="material-icons">info</i>
      <p>Sıkça Sorulan Sorular</p>
    </a>
  </li>
</ul>
</div>
</div>