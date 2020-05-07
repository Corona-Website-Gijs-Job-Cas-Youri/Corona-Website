<?php 
  session_start();

  $_SESSION['producten'] = 0;
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Winkelwagen</title>
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
          <li><a href="webshop.php">Webshop</a></li>
          <li><a href="risicogroep.php">Risicogroep</a></li>
          <li><a href="info.php">Informatie</a></li>
          <li class="selected"><a href="winkelwagen.php">Winkelwagen</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
    
      <div id="content">
        <?php 
        if(!isset($_SESSION['bestelling'])){

        }else{
          ?> 
          <table>
            <tr>
              <th>product naam</th>
              <th>aantal</th>
              <th>totaal prijs</th>
            </tr>
            <?php
            for($aantalProducten = 0; $aantalProducten == $_SESSION['producten']; $aantalProducten++){
            ?>
            <tr>
              <td><?php echo $_SESSION['product'] ?></td>
              <td><?php echo $_SESSION['bestelling']?></td>
              <td><?php echo $_SESSION['prijsTotaal']?>&euro;</td>
            </tr>
            <?php
          }
          ?>
          </table>
          <?php
        }
        ?>
        <form action="winkelwagen.php" method="get">
        <button>bestellen</button>
        <button type="submit" formaction="webshop.php">verder winkelen</button>
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
