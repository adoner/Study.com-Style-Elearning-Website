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
    <style>
/* Style the element that is used to open and close the accordion class */
p.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
    margin-bottom:10px;
}

/* Add a background color to the accordion if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
p.accordion.active, p.accordion:hover {
    background-color: #ddd;
}

/* Unicode character for "plus" sign (+) */
p.accordion:after {
    content: '\2795'; 
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

/* Unicode character for "minus" sign (-) */
p.accordion.active:after {
    content: "\2796"; 
}

/* Style the element that is used for the panel class */

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.4s ease-in-out;
    opacity: 0;
    margin-bottom:10px;
}

div.panel.show {
    opacity: 1;
    max-height: 500px; /* Whatever you like, as long as its more than the height of the content (on all screen sizes) */
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function(event) { 


var acc = document.getElementsByClassName("accordion");
var panel = document.getElementsByClassName('panel');

for (var i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
        var setClasses = !this.classList.contains('active');
        setClass(acc, 'active', 'remove');
        setClass(panel, 'show', 'remove');

        if (setClasses) {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
}

function setClass(els, className, fnName) {
    for (var i = 0; i < els.length; i++) {
        els[i].classList[fnName](className);
    }
}

});
</script>
</head>

<body> 
<div class="wrapper" style="background-color:#09F">
<div class="main main-raised">
<!--nav pills -->
<div id="navigation-pills" style="padding:15px; color:#000">
<div class="row">
<div class="col-md-12">
<ul class="nav nav-pills nav-pills-rose">
  <li class="active"><a href="#pill1" data-toggle="tab">Başlarken</a></li>
  <li><a href="#pill2" data-toggle="tab">Üyelik</a></li>
  <li><a href="#pill3" data-toggle="tab">Soru Sorma</a></li>
  <li><a href="#pill4" data-toggle="tab">Soru Çözümü</a></li>
  <li><a href="#pill5" data-toggle="tab">Tavsiye Kodu</a></li>
  <li><a href="#pill6" data-toggle="tab">Gizlilik</a></li>
  <li><a href="#pill7" data-toggle="tab">Üyelik İptali</a></li>
</ul>
<div class="tab-content tab-space">
    <div class="tab-pane active" id="pill1">
    
    <div style="padding:20px 5px 20px 5px;">               
    <p class="accordion">S1. Nasıl ödeme işlemi gerçekleştirebilirim?</p>
    <div class="panel"><b>Ödeme Yöntemleri:</b><br>
<b>1. Kredi Kartı:</b> Dilediğin kredi kartı ile ödeme yapabilir ve çok aylık paketlerimizde taksit imkanından faydalanabilirsin.<br>
<b>2. Banka Kartı:</b> Ödeme ekranında “3D secure ile ödemek istiyorum” seçeneğini işaretleyip ödeme işlemine devam edebilirsin.<br>
<b>3. Havale:</b> Hesap bilgilerine ulaşmak için uygulama içerisindeki “Destek” kısmına yazabilir ya da destek@sanaltebesir.com’a mail atabilirsin.<br>
<b>NOT:</b><br>
<ul>
<li>Kampanyalı paketlerde havale geçerli değildir.</li>
<li>Havale ile yapılan ödemelerde taksit seçeneği bulunmuyor.</li>
</ul>
</div>
                
<p class="accordion">S2. Sanal Tebeşir'i nasıl deneyebilirim? </p>
<div class="panel">

Sanal Tebeşir'i nasıl deneyebilirim?<br>
1. Uygulamamızı buradan indir,<br>
2. “Kayıt Ol” sekmesine tıklayıp Sanal Tebeşir uygulamasını kullanacağın telefon numarasını gir,<br>
3. Profil bilgilerini doldur, artık Sanal Tebeşir'i ücretsiz olarak deneyebilirsin!<br>
Dilersen paket alıp Sanal Tebeşir üyeliğini başlatabilir ve Sanal Tebeşir'in ayrıcalıklarından yararlanabilirsin.<br>

</div>
                
<p class="accordion">S3. Nasıl üyelik paketi alabilirim?</p>
<div class="panel">

<ul>
<li>Dilediğin paket için “Hemen Başla” butonuna tıkla.</li>
<li>Paketini kullanmayı düşündüğün telefon numarasını gir.</li>
<li>Telefonuna SMS ile gelen onay kodunu gir.</li>
<li>Ödeme işlemlerini tamamla.</li>
<li>Aramıza hoş geldin 🙂 Haydi hemen ilk sorunu sor!</li>
</ul>

</div>

<p class="accordion">S4. Sanal Tebeşir ücretli mi?</p>
<div class="panel">

Sanal Tebeşir mobil uygulamasını indirmek ücretsiz! Uygulamayı indirdiğinde Sanal Tebeşir’i deneyimleyebilmen ve sana olan<br> faydasını görebilmen için ücretsiz soru haklarına sahip olduğun bir deneme süreci başlar. Deneme sürecin sonlandığında soru<br> sormaya devam edebilmek için websitemiz sanaltebesir.com’da bulunan üyelik paketlerinden satın alabilirsin. Merak etme bir paket<br> alma işlemi gerçekleştirmediğin sürece herhangi bir ücret alınmayacaktır.<br> 

</div>
<p class="accordion">S5. Üyelik paketi ödemeleri güvenli mi?</p>
<div class="panel">

Üyelik paketi alımı sırasında Paybyme ödeme sistemi altyapısını kullandığımız için kredi kartınızla güvenli bir şekilde ödeme<br> işlemini gerçekleştirebilirsiniz. Ödeme işlemleri sırasında en üst seviye güvenlik sağlayan ve endüstri standardı olan <br>
SSL (Secure Socket Layer) protokolü kullanılmaktadır. Bunun yanı sıra ödeme işlemlerinde “3D secure ile ödemek istiyorum”<br> seçeneğini işaretleyerek güvenli bir şekilde işlemini gerçekleştirebilirsin. <br>

</div>
<p class="accordion">S6. Sanal Tebeşir’de hangi özellikler bulunuyor?</p>
<div class="panel">


<b>1. Soru Sorma:</b> Uygulamamızda 13 farklı dersten dilediğin zaman dilediğin yerde soru sorabilirsin. Soruların ortalama 15 dakika<br> içerisinde %100 çözüm garantisiyle eğitmenlerimiz tarafından hazırlanarak görsel şeklinde telefonuna iletilir. Haydi sen de<br> Sanal Tebeşir’e ilk sorunu sor!<br>
<b>2. Soru Bankası:</b>  Ana ekranın Soru Bankası tuşuna dokunarak “Soru Bankası”na ulaşabilirsin. Sanal Tebeşir soru<br> kütüphanesinde her ders ve konu için farklı zorluk seviyelerinde sorular ile çözümleri bulunuyor. Haydi hemen dilediğin konuda,<br> dilediğin zorlukta soru çöz!<br>
<b>3. Eğitim Koçluğu:</b> Uygulamada ana ekranın üst tarafındaki  “Eğitim Koçluğu” kısmındaki destek ekibimizden sınava hazırlık<br> sürecindeki problemlerin konusunda yardım isteyebilir ve anında destek alabilirsin. Eğitim koçluğu ekibimiz sorularını heyecanla<br> bekliyor!<br>

</div>
<p class="accordion">S7. Ödeme sırasında kredi kartı bilgilerimi girdikten sonra hata uyarısı alıyorum. Bu ne anlama geliyor?</p>
<div class="panel">
<ul>
<li> Yetersiz bakiye / limit yetersiz<br><br>
Kartında kalan limit, paketi satın almak için yetersiz olduğu anlamına gelir. Kartının limitini arttırdıktan veya karta para yatırdıktan sonra ödeme işlemlerini tekrarlayarak üyelik paketini satın alabileceksin. Dilersen başka bir kredi kartı ile ödemeyi gerçekleştirebilirsin.</li><br>

<li>Kartın son kullanma tarihi hatalı<br><br>
Kartın son kullanma tarihi hatalı girilmiş olabilir. Kartın son kullanma tarihi, kart üzerinde ay/yıl şeklinde yazan (örn: 08/23 ) ve kartınızın geçerli olduğu son tarihi belirten kısımdır. Bu kısmın yanlış girilmiş olması veya son kullanma tarihinin geçmiş olması bu hataya yol açabilir.</li> <br> 

<li>Kart internet alışverişine kapalı<br><br>
Kredi kartın internet alışverişine kapalı olabilir. Önce ilgili banka ile iletişime geçerek kartını e-ticarete açtırıp sonrasında işlemi gerçekleştirmen gerekiyor. Bu linkten kartının nasıl internet alışverişine açılacağını öğrenebilirsin  </li><br>

<li>Banka kartı ile işlem yapılamamaktadır.<br><br>
Kart bilgilerini girip  "3D secure ile ödemek istiyorum" seçeneğini işaretledikten sonra telefonuna SMS ile gelen onay kodunu girerek ödeme işlemini gerçekleştirebilirsin.  </li><br>

<li>Diğer<br><br>
Belirtilenler dışında bir sorun yaşanıyorsa lütfen <a href="mailto:destek@sanaltebesir.com">destek@sanaltebesir.com</a> ile iletişime geç </li><br>
</ul>

</div>
                
</div>

</div>
<div class="tab-pane" id="pill2">

<div style="padding:20px 5px 20px 5px;">               
<p class="accordion">S1. </p>
<div class="panel"></div>

<p class="accordion">S2.</p>
<div class="panel"></div>

<p class="accordion">S3.</p>
<div class="panel"></div>

<p class="accordion">S4.</p>
<div class="panel"></div>                
</div>

</div>
<div class="tab-pane" id="pill3">

    <div style="padding:20px 5px 20px 5px;">               
    <p class="accordion">S1. </p>
    <div class="panel">dfhdhdfhfdhfdhfdhfdhfdhfdh</div>
    
    <p class="accordion">S2.</p>
    <div class="panel">fhdhgfdhfdhfdhdf</div>
    
    <p class="accordion">S3.</p>
    <div class="panel">dfhfdhfdhdfhdfh</div>
    
    <p class="accordion">S4.</p>
    <div class="panel">dfhfdhdfhfdhfdhfdh</div>                
    </div>
    
</div>
<div class="tab-pane" id="pill4">

    <div style="padding:20px 5px 20px 5px;">               
    <p class="accordion">S1. </p>
    <div class="panel">dfhdhdfhfdhfdhfdhfdhfdhfdh</div>
    
    <p class="accordion">S2.</p>
    <div class="panel">fhdhgfdhfdhfdhdf</div>
    
    <p class="accordion">S3.</p>
    <div class="panel">dfhfdhfdhdfhdfh</div>
    
    <p class="accordion">S4.</p>
    <div class="panel">dfhfdhdfhfdhfdhfdh</div>                
    </div>
    
</div>
<div class="tab-pane" id="pill5">

    <div style="padding:20px 5px 20px 5px;">               
    <p class="accordion">S1. </p>
    <div class="panel">dfhdhdfhfdhfdhfdhfdhfdhfdh</div>
    
    <p class="accordion">S2.</p>
    <div class="panel">fhdhgfdhfdhfdhdf</div>
    
    <p class="accordion">S3.</p>
    <div class="panel">dfhfdhfdhdfhdfh</div>
    
    <p class="accordion">S4.</p>
    <div class="panel">dfhfdhdfhfdhfdhfdh</div>                
    </div>
    
</div>
<div class="tab-pane" id="pill6">

    <div style="padding:20px 5px 20px 5px;">               
    <p class="accordion">S1. </p>
    <div class="panel">dfhdhdfhfdhfdhfdhfdhfdhfdh</div>
    
    <p class="accordion">S2.</p>
    <div class="panel">fhdhgfdhfdhfdhdf</div>
    
    <p class="accordion">S3.</p>
    <div class="panel">dfhfdhfdhdfhdfh</div>
    
    <p class="accordion">S4.</p>
    <div class="panel">dfhfdhdfhfdhfdhfdh</div>                
    </div>
    
</div>
<div class="tab-pane" id="pill7">

    <div style="padding:20px 5px 20px 5px;">               
    <p class="accordion">S1. </p>
    <div class="panel">dfhdhdfhfdhfdhfdhfdhfdhfdh</div>
    
    <p class="accordion">S2.</p>
    <div class="panel">fhdhgfdhfdhfdhdf</div>
    
    <p class="accordion">S3.</p>
    <div class="panel">dfhfdhfdhdfhdfh</div>
    
    <p class="accordion">S4.</p>
    <div class="panel">dfhfdhdfhfdhfdhfdh</div>                
    </div>
    
</div>

</div>
</div>
	                   
<!--end nav pills -->
</div>
</div>
</div>
</div>
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
