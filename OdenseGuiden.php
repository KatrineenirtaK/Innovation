<!-- Vi har brugt https://imada.sdu.dk/~kslarsen/dm565/index.php som skabelon til vores hjemmeside -->
<!-- Koden til og med linje 61 er uændret, med undtagelse af vores navne i linje 8 -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<meta name="Author" content="Katrine Lindholm Nicolaisen & Laura Kristensen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="design.css?v=1.1">
<title>OdenseGuiden</title>
</script>

</head>
<body>

<script>
/* For small screens, menu gets packed */
function myPhoneMenu() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

/* The following is only relevant for large screens, but shouldn't hurt */
    
/* For buttons, toggle between hiding and showing the dropdown content */
function myMenuSelector(elmnt) {
    ident = elmnt.parentElement.children[1].id;
    elmnt.parentElement.children[1].classList.toggle("show");
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (!elmnt.parentElement.contains(openDropdown) && openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
}

/* Close the dropdown if the user clicks outside of it */
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

    
<div id="main">
<a id="undecorated" href="OdenseGuiden.php">

<table width="100%">

<tr><td>
<table>
<tr><td>
<div id="coursetitle">OdenseGuiden</div>
</td></tr>
<tr><td>
    &nbsp;
</td></tr>
<tr><td>
<b>Den komplette guide</b>
</td></tr>
</table>
</td>

<td>
<img id="logo" src="OdenseGuiden_logo_flag.png" alt="[topimage]" align="right"/>
</td>
</tr>

</table>

</a>
<noscript>
   &nbsp; JavaScript skal være slået til for at denne side virker.
</noscript>

<hr>
      
<div class="topnav" id="myTopnav">
  <a href="OdenseGuiden.php" class="active">Forside</a>
  <div class="dropdown">
    <button class="dropbtn" onclick="myMenuSelector(this)">Oplevelser
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a>Odense Zoo</a>
      <a>Julemarkeder</a>
      <a>Den Fynske Landsby</a>
      <a href="OdenseTeater.php">Odense Teater</a>
      <a href="Foredrag.php">Foredrag</a>
      <a href="StormsPakhus.php">Events i Storms Pakhus</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn" onclick="myMenuSelector(this)">Spisesteder
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a>Brunch</a>
      <a>Caféer og restauranter</a>
      <a>Barer</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn" onclick="myMenuSelector(this)">Gratis aktiviteter
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a>Skøjtesøer</a>
      <a>Kælkebakker</a>
      <a>Bålsteder</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn" onclick="myMenuSelector(this)">Info
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a>Parkeringspladser</a>
      <a>Toiletter</a>
      <a href="Bycykler.php">Cykling i Odense</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn" onclick="myMenuSelector(this)">Partnere
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a>Lokale aktører</a>
      <a href="SocialeMedier.php">Sociale medier</a>
    </div>
  </div>
  <a href="Kalender.php">Kalender</a>
  <a href="Køb.php">Køb</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myPhoneMenu()">&#9776;</a>

</div>

<hr>
      
<div id="content">

<div id="page-headline">Nyheder</div>

Velkommen til OdenseGuiden - Den komplette guide!
<p>
Vi har lavet en oversigt over alt Odense har at byde på. Der er både underholdning, til appetiten og det praktiske.
<p>
Vi håber du får nogle dejlige dage i Odense!

<p><div id="myrule"></div><p>

<h3>Vejret i Odense</h3>

Her kan du se vejret i Odense for den kommende uge.
<p>
På OdenseGuidens hjemmeside kan du finde information om aktiviteter til både varmt og koldt vejr.
<p>
Her i de kolde måneder kan du f.eks. opleve Odenses julebelysning, ose i butikkerne der holder længere åbent eller gribe kælken.
<p>
Kun fantasien sætter grænser, for at opleve dit eget eventyr i H.C. Andersens by!
<p>


<!-- Koden nedenfor er genereret vha. WeatherWidget.io> -->
<a class="weatherwidget-io" href="https://forecast7.com/da/55d4010d40/odense/" data-label_1="ODENSE" data-label_2="Vejrudsigt" data-theme="original" >ODENSE Vejrudsigt</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

<p><div id="myrule"></div><p>

<h3>Storms Pakhus deler gratis juletræer ud</h3>
Julen er hjerternes fest, og der er ingen jul uden juletræ!
<p>
Den 2. december kl. 9.00 - 15.00 kan du komme ned til Storms Pakhus og gratis hente et juletræ.
<p>
Juletræerne er (primært) tiltænkt trængte familier, som måske ikke selv har økonomi eller mulighed for et få et juletræ. Vi håber derfor at folk vil respektere dette.
<p>
Er du interesseret i at få et af juletræerne hjem til dig, kan du skrive dig op til et juletræ hos Storms Pakhus senest den 17. december. Det er først til mølle.
<p>
Du kan læse mere her:
<a href="https://stormspakhus.dk/event/storms-pakhus-deler-juletraeer-ud/" target="_blank">Juletræsuddeling hos Storms Pakhus</a>
<p>
<img id="logo" src="juletræ.png" align="center" style="width:799px">

<p><div id="myrule"></div><p>

<h3>Magisk jul i Odense Zoo</h3>
Fra den 25. november til den 24. december spreder julehyggen sig i Odense Zoo.
<p>
Du kan følge med i årets julekalender "Zoofus og Zoofie - og den falske dyrepasser" fra d. 1. december. Man kan hente en gratis lågekalender i Zoobutikken eller Rema1000.
<p>
Derudover byder de på juleboder og julelys der kan nydes af hele familien.
<p>
Du kan læse mere her:
<a href="https://jul.odensezoo.dk/jul-i-zoo" target="_blank">Jul i Zoo</a>
<p>
<img id="logo" src="jul_i_zoo.jpg" align="center" style="width:800px; height:270px/>

<p><div id="myrule"></div><p>

<p>
&nbsp;
<p>
<hr>
<p>    
<font size="2px">
<div style="font-variant: small-caps;">
&nbsp;&nbsp;
<a>Katrine Lindholm Nicolaisen</a>
&#9642;
<a>Laura Kristensen</a>
</div>
</font>
<p>

</div>
</div>
</body>
</html>
