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

<div id="page-headline">Køb oplevelsespakker og billetter</div>
Denne side er tiltænkt køb af billetter og oplevelsespakker.

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
