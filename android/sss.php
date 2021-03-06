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
  <li class="active"><a href="#pill1" data-toggle="tab">Ba??larken</a></li>
  <li><a href="#pill2" data-toggle="tab">??yelik</a></li>
  <li><a href="#pill3" data-toggle="tab">Soru Sorma</a></li>
  <li><a href="#pill4" data-toggle="tab">Soru ????z??m??</a></li>
  <li><a href="#pill5" data-toggle="tab">Tavsiye Kodu</a></li>
  <li><a href="#pill6" data-toggle="tab">Gizlilik</a></li>
  <li><a href="#pill7" data-toggle="tab">??yelik ??ptali</a></li>
</ul>
<div class="tab-content tab-space">
    <div class="tab-pane active" id="pill1">
    
    <div style="padding:20px 5px 20px 5px;">               
    <p class="accordion">S1. Nas??l ??deme i??lemi ger??ekle??tirebilirim?</p>
    <div class="panel"><b>??deme Y??ntemleri:</b><br>
<b>1. Kredi Kart??:</b> Diledi??in kredi kart?? ile ??deme yapabilir ve ??ok ayl??k paketlerimizde taksit imkan??ndan faydalanabilirsin.<br>
<b>2. Banka Kart??:</b> ??deme ekran??nda ???3D secure ile ??demek istiyorum??? se??ene??ini i??aretleyip ??deme i??lemine devam edebilirsin.<br>
<b>3. Havale:</b> Hesap bilgilerine ula??mak i??in uygulama i??erisindeki ???Destek??? k??sm??na yazabilir ya da destek@sanaltebesir.com???a mail atabilirsin.<br>
<b>NOT:</b><br>
<ul>
<li>Kampanyal?? paketlerde havale ge??erli de??ildir.</li>
<li>Havale ile yap??lan ??demelerde taksit se??ene??i bulunmuyor.</li>
</ul>
</div>
                
<p class="accordion">S2. Sanal Tebe??ir'i nas??l deneyebilirim? </p>
<div class="panel">

Sanal Tebe??ir'i nas??l deneyebilirim?<br>
1. Uygulamam??z?? buradan indir,<br>
2. ???Kay??t Ol??? sekmesine t??klay??p Sanal Tebe??ir uygulamas??n?? kullanaca????n telefon numaras??n?? gir,<br>
3. Profil bilgilerini doldur, art??k Sanal Tebe??ir'i ??cretsiz olarak deneyebilirsin!<br>
Dilersen paket al??p Sanal Tebe??ir ??yeli??ini ba??latabilir ve Sanal Tebe??ir'in ayr??cal??klar??ndan yararlanabilirsin.<br>

</div>
                
<p class="accordion">S3. Nas??l ??yelik paketi alabilirim?</p>
<div class="panel">

<ul>
<li>Diledi??in paket i??in ???Hemen Ba??la??? butonuna t??kla.</li>
<li>Paketini kullanmay?? d??????nd??????n telefon numaras??n?? gir.</li>
<li>Telefonuna SMS ile gelen onay kodunu gir.</li>
<li>??deme i??lemlerini tamamla.</li>
<li>Aram??za ho?? geldin ???? Haydi hemen ilk sorunu sor!</li>
</ul>

</div>

<p class="accordion">S4. Sanal Tebe??ir ??cretli mi?</p>
<div class="panel">

Sanal Tebe??ir mobil uygulamas??n?? indirmek ??cretsiz! Uygulamay?? indirdi??inde Sanal Tebe??ir???i deneyimleyebilmen ve sana olan<br> faydas??n?? g??rebilmen i??in ??cretsiz soru haklar??na sahip oldu??un bir deneme s??reci ba??lar. Deneme s??recin sonland??????nda soru<br> sormaya devam edebilmek i??in websitemiz sanaltebesir.com???da bulunan ??yelik paketlerinden sat??n alabilirsin. Merak etme bir paket<br> alma i??lemi ger??ekle??tirmedi??in s??rece herhangi bir ??cret al??nmayacakt??r.<br> 

</div>
<p class="accordion">S5. ??yelik paketi ??demeleri g??venli mi?</p>
<div class="panel">

??yelik paketi al??m?? s??ras??nda Paybyme ??deme sistemi altyap??s??n?? kulland??????m??z i??in kredi kart??n??zla g??venli bir ??ekilde ??deme<br> i??lemini ger??ekle??tirebilirsiniz. ??deme i??lemleri s??ras??nda en ??st seviye g??venlik sa??layan ve end??stri standard?? olan <br>
SSL (Secure Socket Layer) protokol?? kullan??lmaktad??r. Bunun yan?? s??ra ??deme i??lemlerinde ???3D secure ile ??demek istiyorum???<br> se??ene??ini i??aretleyerek g??venli bir ??ekilde i??lemini ger??ekle??tirebilirsin. <br>

</div>
<p class="accordion">S6. Sanal Tebe??ir???de hangi ??zellikler bulunuyor?</p>
<div class="panel">


<b>1. Soru Sorma:</b> Uygulamam??zda 13 farkl?? dersten diledi??in zaman diledi??in yerde soru sorabilirsin. Sorular??n ortalama 15 dakika<br> i??erisinde %100 ????z??m garantisiyle e??itmenlerimiz taraf??ndan haz??rlanarak g??rsel ??eklinde telefonuna iletilir. Haydi sen de<br> Sanal Tebe??ir???e ilk sorunu sor!<br>
<b>2. Soru Bankas??:</b>  Ana ekran??n Soru Bankas?? tu??una dokunarak ???Soru Bankas?????na ula??abilirsin. Sanal Tebe??ir soru<br> k??t??phanesinde her ders ve konu i??in farkl?? zorluk seviyelerinde sorular ile ????z??mleri bulunuyor. Haydi hemen diledi??in konuda,<br> diledi??in zorlukta soru ????z!<br>
<b>3. E??itim Ko??lu??u:</b> Uygulamada ana ekran??n ??st taraf??ndaki  ???E??itim Ko??lu??u??? k??sm??ndaki destek ekibimizden s??nava haz??rl??k<br> s??recindeki problemlerin konusunda yard??m isteyebilir ve an??nda destek alabilirsin. E??itim ko??lu??u ekibimiz sorular??n?? heyecanla<br> bekliyor!<br>

</div>
<p class="accordion">S7. ??deme s??ras??nda kredi kart?? bilgilerimi girdikten sonra hata uyar??s?? al??yorum. Bu ne anlama geliyor?</p>
<div class="panel">
<ul>
<li> Yetersiz bakiye / limit yetersiz<br><br>
Kart??nda kalan limit, paketi sat??n almak i??in yetersiz oldu??u anlam??na gelir. Kart??n??n limitini artt??rd??ktan veya karta para yat??rd??ktan sonra ??deme i??lemlerini tekrarlayarak ??yelik paketini sat??n alabileceksin. Dilersen ba??ka bir kredi kart?? ile ??demeyi ger??ekle??tirebilirsin.</li><br>

<li>Kart??n son kullanma tarihi hatal??<br><br>
Kart??n son kullanma tarihi hatal?? girilmi?? olabilir. Kart??n son kullanma tarihi, kart ??zerinde ay/y??l ??eklinde yazan (??rn: 08/23 ) ve kart??n??z??n ge??erli oldu??u son tarihi belirten k??s??md??r. Bu k??sm??n yanl???? girilmi?? olmas?? veya son kullanma tarihinin ge??mi?? olmas?? bu hataya yol a??abilir.</li> <br> 

<li>Kart internet al????veri??ine kapal??<br><br>
Kredi kart??n internet al????veri??ine kapal?? olabilir. ??nce ilgili banka ile ileti??ime ge??erek kart??n?? e-ticarete a??t??r??p sonras??nda i??lemi ger??ekle??tirmen gerekiyor. Bu linkten kart??n??n nas??l internet al????veri??ine a????laca????n?? ????renebilirsin  </li><br>

<li>Banka kart?? ile i??lem yap??lamamaktad??r.<br><br>
Kart bilgilerini girip  "3D secure ile ??demek istiyorum" se??ene??ini i??aretledikten sonra telefonuna SMS ile gelen onay kodunu girerek ??deme i??lemini ger??ekle??tirebilirsin.  </li><br>

<li>Di??er<br><br>
Belirtilenler d??????nda bir sorun ya??an??yorsa l??tfen <a href="mailto:destek@sanaltebesir.com">destek@sanaltebesir.com</a> ile ileti??ime ge?? </li><br>
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
