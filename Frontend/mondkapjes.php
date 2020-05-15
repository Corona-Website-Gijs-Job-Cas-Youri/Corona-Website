<?php
session_start();
$_SESSION['bestelling1'] = '0';
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>mondkapjes</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Covid<span class="logo_colour">_Info</a></h1>
          <h2>Blijf Thuis, Verveel Je Niet!</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="bezigheden.php">Bezigheden</a></li>
          <li><a href="besmetting.php">Besmetting</a></li>
          <li><a href="risicogroep.php">Risicogroep</a></li>
          <li><a href="info.php">Informatie</a></li>
          <li class="selected"><a href="webshop.php">Webshop</a></li>
          <li><a href="winkelwagen.php">Winkelwagen</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h1>Laatste Nieuws</h1>
        <h5>21-4-2020</h5>
        <p>Er zijn bijna geen landen meer waar er geen Covid 19 is, toch blijven mensen naar buiten gaan.<br /><a href="https://gisanddata.maps.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6">lees meer</a></p>
        <h1>STATISTIEKEN</h1>
        <ul>
          <li>aantal besmetingen in nederland:<p id="nummer"> 33.405</p>
          </li>
          <li>aantal doden in nederland: <p id="nummer">3.751</p>
          </li>
          <li>aantal besmetingen wereld wijd: <p id="nummer">2.486.964</p>
          </li>
          <li>aantal doden wereld wijd: <p id="nummer">170.418</li>
        </ul>

      </div>
      <div id="content">
        <div id="product">
          <h1 style="text-align: center; font-size: 30px">mondkapjes</h1>
          <img src="style/mondkapjes.jpg" alt="mondkapjes" style="width: 350px; height: 350px; padding-left: 100px"></img>
        </div>
        <h1 style="font-weight: bold">&euro;5,00</h1>
        <form method="post">
          <input type="number" min="0" max="15" name="aantal" step="1"><button name="toevoegen" class="verder">aan winkelwagen toevoegen</button>

          <div id="beschrijving">
            <p>Dit mondkapje is geschikt voor elk gezichtstype en heeft 3 lagen met een goede bescherming tegen infecties.
              Tevens bevat het een goede luchtdoorlatendheid door het gebruik van lichte materialen. Doordat warmte zich minder kan ophopen onder het masker,
              zijn er minder huidirritaties.</p>
          </div>

      </div>
      <?php
      if (isset($_POST['toevoegen'])) {
        $_SESSION['product1'] = "mondkapjes";
        $_SESSION['bestelling1'] = $_POST['aantal'];
        $_SESSION['prijsTotaal1'] = 5 * $_POST['aantal'];
        $_SESSION['bestelling'] = 1;

        header("location: winkelwagen.php");
      }

      ?>
      </form>
    </div>
  </div>
  <div id="footer">
    <p><a href="index.php">Home</a> | <a href="bezigheden.php">Bezigheden</a> | <a href="besmetting.php">Besmetting</a> | <a href="webshop.php">Webshop</a> | <a href="risicogroep.php">Risicogroep</a> | <a href="info.php">informatie</a></p>
    <p>Copyright &copy; simple_light | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
  </div>
  </div>
</body>

</html>