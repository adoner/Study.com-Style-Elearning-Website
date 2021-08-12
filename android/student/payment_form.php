<?php
session_start();
require_once("../../includes/db.php");
$userid = $_GET["userid"];

?>
<!doctype html>
<html lang="tr">
<head>
</head>
<body>
<div><p style="text-align:center; font-size:18px">ÖDEME BİLGİLERİ</p></div>
<form>
<div><label>Adı Soyadı</label><input name="adsoyad" type="text"/></div>
<div><label>Kart No</label><input name="kartno" type="text"/></div>
<div><label>Geçerlilik Tarihi</label><input name="validity" type="text"/></div>
<div><label>Güvenlik No (CVV)</label><input name="guvenlik" type="text"/></div>
<div><input name="guvenlik" type="submit"/></div>
</form>

<input type="button" value="Say hello" onClick="showAndroidToast('Hello Android!')" />

<script type="text/javascript">
    function showAndroidToast(toast) {
        Android.showToast(toast);
    }
</script>
</body>
</html>