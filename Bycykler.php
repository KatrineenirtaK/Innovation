<!-- Vi har brugt https://imada.sdu.dk/~kslarsen/dm565/index.php som skabelon til vores hjemmeside -->
<!-- Vi har derudover brugt https://imada.sdu.dk/~kslarsen/coauthors.php som skabelon til at lave kortet -->
<!-- Koden til og med linje 70 er uændret, med undtagelse af vores navne i linje 15 -->
<!DOCTYPE html>
<html>
<head>
  <title>OdenseGuiden</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <link rel="stylesheet" type="text/css" href="./design.css" />
  <script type="module" src="./index.js"></script>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width">
<meta name="Author" content="Katrine Lindholm Nicolaisen & Laura Kristensen" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="design.css?v=1.1">
<title>OdenseGuiden</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
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

<div id="page-headline">Cykling i Odense</div>

<h3>Bycykler</h3>
Oplev Odense på cykel og mærk friheden. Odense byder på gode muligheder for at gribe en bycykel.
<p>
Start dagen inde i Odense og nyd måske en lækker brunch, en god frokost eller spring direkte på cyklen. Start for eksempel turen fra det idyliske Munkemose og følg stierne langs Odense Å direkte til Odense Zoo, eller videre ud til den Fynske Landsby.
<p>
Alternativt mærke storbyens puls og cykle fra centrum over Byens Bro og ned til Odense havn, hvor I gratis kan tage en forfriskende svømmetur i Odense Havnebad, eller besøg Storms Pakhus og se hvilke arrangementer de afholder eller nyde et godt måltid fra det verdenskøkken du foretrækker.
<p> 
Mulighederne er mange, udforsk dem alle herpå OdenseGuiden – god cykeltur.
<p>

<h3>Cykelpumper</h3>
Hvis uheldet er ude, og cyklen er flad, kan du gratis pumpe din cykel ved en af de offentligt tilgængelige cykelpumper.
<p>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js" integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q==" crossorigin=""></script>
<style>
#mapid { height: 360px; }

.middle > * {
  vertical-align: middle;
}
</style>

<div id="mapid"></div>

<script>
var mymap = L.map('mapid').setView([55.4, 10.4], 11.5);

var blueIcon = new L.Icon({
  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

var redIcon = new L.Icon({
  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});


L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoia3NsYXJzZW4iLCJhIjoiY2praTZ2YnAzMHppZTNxbWl4emVpMXFlayJ9.zOmv80uNrBwCXOWBr21wXQ', {attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>', tileSize: 512, maxZoom: 30, zoomOffset: -1, id: 'mapbox/streets-v11', accessToken: 'your.mapbox.access.token'}).addTo(mymap);

//marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();

//Bycykler
var marker0 = L.marker([55.395293,10.380314], {icon: blueIcon}).addTo(mymap);
marker0.bindPopup("<b>Brandts klædefabrik</b><br>Antal: 12");

var marker1 = L.marker([55.366409,10.385628], {icon: blueIcon}).addTo(mymap);
marker1.bindPopup("<b>Den Fynske Landsby</b><br>Antal: 12");

var marker2 = L.marker([55.397559, 10.389213], {icon: blueIcon}).addTo(mymap);
marker2.bindPopup("<b>Nørregade v/Fisketorvet</b><br>Antal: 12");

var marker3 = L.marker([55.395038, 10.3871], {icon: blueIcon}).addTo(mymap);
marker3.bindPopup("<b>Klingenberg</b><br>Antal: 20");

var marker4 = L.marker([55.397481, 10.384902], {icon: blueIcon}).addTo(mymap);
marker4.bindPopup("<b>Slotsgade/Jernbanegade</b><br>Antal: 9");

var marker5 = L.marker([55.392463, 10.380987], {icon: blueIcon}).addTo(mymap);
marker5.bindPopup("<b>Filosofgangen v/Åfarten</b><br>Antal: 12");

var marker6 = L.marker([55.396435, 10.388969], {icon: blueIcon}).addTo(mymap);
marker6.bindPopup("<b>V/ turistbureauet</b><br>Antal: 10");

var marker7 = L.marker([55.378204, 10.370595], {icon: blueIcon}).addTo(mymap);
marker7.bindPopup("<b>Zoologisk Have</b><br>Antal: 12");

//Cykelpumper
var marker8 = L.marker([55.411046, 10.4103], {icon: redIcon}).addTo(mymap);
marker8.bindPopup("<b>Kochsgade/Døckerslundsvej</b>");

var marker9 = L.marker([55.375788, 10.428477], {icon: redIcon}).addTo(mymap);
marker9.bindPopup("<b>Niels Bohrs Alle/Campusvej</b>");

var marker10 = L.marker([55.381447, 10.396063], {icon: redIcon}).addTo(mymap);
marker10.bindPopup("<b>Hjallesevej/Munkerisvej</b>");

var marker11 = L.marker([55.381999, 10.370855], {icon: redIcon}).addTo(mymap);
marker11.bindPopup("<b>Sdr. Boulevard/Tietgens Alle</b>");

var marker12 = L.marker([55.409212, 10.317609], {icon: redIcon}).addTo(mymap);
marker12.bindPopup("<b>Langesøstien/Pårupvej</b>");

var marker13 = L.marker([55.411634, 10.36873], {icon: redIcon}).addTo(mymap);
marker13.bindPopup("<b>Gammelsø/Næsbyvej</b>");

var marker14 = L.marker([55.398902, 10.379449], {icon: redIcon}).addTo(mymap);
marker14.bindPopup("<b>Kongensgade Nord</b>");

var marker15 = L.marker([55.394298, 10.384684], {icon: redIcon}).addTo(mymap);
marker15.bindPopup("<b>Skt. Anne Plads</b>");

var marker16 = L.marker([55.396722, 10.389575], {icon: redIcon}).addTo(mymap);
marker16.bindPopup("<b>Fisketorvet</b>");

var marker17 = L.marker([55.400703, 10.387314], {icon: redIcon}).addTo(mymap);
marker17.bindPopup("<b>Cykelparkeringskælder under Fyens Stiftidende</b>");

</script>

<div class="middle">
<img vertical-align="middle" src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png" alt="Marker Red" style="width:12px;">
Cykelpumper.
<br>
<img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png" alt="Marker Blue" style="width:12px;">
Bycykler.
<br>
</div>

<p><div id="myrule"></div><p>


<p>
&nbsp;
<p>
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
