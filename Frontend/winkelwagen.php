<?php 
  session_start();

  $_SESSION['prijsTotaal'] = 0;
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

      <div id="winkelwagen">
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
            <div id="productwinkel">
            <?php 
              if(isset($_SESSION['bestelling1'])){
            ?>
            <tr>
              <td><?php echo $_SESSION['product1'] ?></td>
              <td><?php echo $_SESSION['bestelling1']?></td>
              <td>&euro;<?php echo $_SESSION['prijsTotaal1']?></td>
              <?php $_SESSION['prijsTotaal'] += $_SESSION['prijsTotaal1']; ?>
            </tr>
            <?php 
            }
            ?>
            </div>
            <?php
            
              if(isset($_SESSION['bestelling2'])){
            ?>
            <tr>
              <td><?php echo $_SESSION['product2'] ?></td>
              <td><?php echo $_SESSION['bestelling2']?></td>
              <td>&euro;<?php echo $_SESSION['prijsTotaal2']?></td>
              <?php $_SESSION['prijsTotaal'] += $_SESSION['prijsTotaal2']; ?>
            </tr>
            <?php 
            }
             
              if(isset($_SESSION['bestelling3'])){
            ?>
            <tr>
              <td><?php echo $_SESSION['product3'] ?></td>
              <td><?php echo $_SESSION['bestelling3']?></td>
              <td>&euro;<?php echo $_SESSION['prijsTotaal3']?></td>
              <?php $_SESSION['prijsTotaal'] += $_SESSION['prijsTotaal3'];?>
            </tr>
            <?php 
            }
            
            ?>
          </table>

          <h3>totaal: &euro;<?php echo $_SESSION['prijsTotaal'] ?></h3>
  
          <?php
        }
        ?>
        <form action="winkelwagen.php" method="post">
        <button name="bestel" formaction="bestellen.php">bestellen</button>
        <button type="submit" formaction="webshop.php">verder winkelen</button>
        <button>winkel wagen legen</button>
        </form>
        
      </div>
      </div>
    </div>
    <div id="footer">
    <p><a href="index.php">Home</a> | <a href="bezigheden.php">Bezigheden</a> | <a href="besmetting.php">Besmetting</a> | <a href="webshop.php">Webshop</a> | <a href="risicogroep.php">Risicogroep</a> | <a href="info.php">informatie</a></p>
      <p>Copyright &copy; simple_light | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
  </div>
</body>
</html>
