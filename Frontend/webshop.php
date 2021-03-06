<!DOCTYPE HTML>
<html>

<head>
  <title>Webshop</title>
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
        <p>Er zijn bijna geen landen meer waar er geen Covid 19 is, toch blijven mensen naar buiten gaan.<br /><a href="https://gisanddata.maps.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6" target="_blank">lees meer</a></p>
        <h1>STATISTIEKEN</h1>
        <ul>
          <li>aantal besmetingen in Nederland:<p id="nummer"> 33.405</p></li>
          <li>aantal doden in Nederland: <p id="nummer">3.751</p></li>
          <li>aantal besmetingen wereldwijd: <p id="nummer">2.486.964</p></li>
          <li>aantal doden wereldwijd: <p id="nummer">170.418</li>
        </ul>
        
      </div>
      <a href="mondkapjes.php">
      <div id="content">
          <div id="product">
            <img src="style/mondkapjes.jpg" alt="mondkapjes" style="width: 350px; height: 350px; padding-left: 100px"></img>
            <h2 style="text-align: center; padding-top: 20px; font-weight: bold;">mondkapjes</h2>
          </div>
      </a>
      <a href="handschoenen.php">
          <div id="product">
            <img src="style/hand.jpg" alt="handschoenen" style="width: 350px; height: 350px; padding-left: 100px"></img>
            <h2 style="text-align: center; padding-top: 20px; font-weight: bold;">handschoenen</h2>
          </div>
      </a>
      <a href="zeep.php">
          <div id="product">
            <img src="style/zeep.jpg" alt="zeep" style="width: 350px; height: 350px; padding-left: 100px"></img>
            <h2 style="text-align: center; padding-top : 20px; font-weight: bold;">zeep</h2>
          </div>
      </a>
        
          </div>
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
