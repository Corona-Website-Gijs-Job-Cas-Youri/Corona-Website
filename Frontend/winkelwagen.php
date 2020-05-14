<?php
session_start();
require('functies.php');

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
          <li><a href="risicogroep.php">Risicogroep</a></li>
          <li><a href="info.php">Informatie</a></li>
          <li><a href="webshop.php">Webshop</a></li>
          <li class="selected"><a href="winkelwagen.php">Winkelwagen</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content" class="cleanbackground">
    
      <div id="content">

      <div id="container">
      <div id="winkelwagen" >
        <?php 
        if(!isset($_SESSION['bestelling'])){

        }else{
          ?> 
          <div id="table_wrap">
          <table>
            <tr>
              <th>product naam</th>
              <th>aantal</th>
              <th>totaalprijs</th>
            </tr>
            <div id="productwinkel">
            <?php 
              if(isset($_SESSION['bestelling1'])){
            ?>
            <tr>
              <td><?php echo $_SESSION['product1'] ?></td>
              <td><?php echo $_SESSION['bestelling1']?></td>
              <td class="borderrijtop">&euro;<?php echo $_SESSION['prijsTotaal1']?></td>
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
              <td class="borderrij">&euro;<?php echo $_SESSION['prijsTotaal2']?></td>
              <?php $_SESSION['prijsTotaal'] += $_SESSION['prijsTotaal2']; ?>
            </tr>
            <?php 
            }
             
              if(isset($_SESSION['bestelling3'])){
            ?>
            <tr>
              <td><?php echo $_SESSION['product3'] ?></td>
              <td><?php echo $_SESSION['bestelling3']?></td>
              <td class="borderrij">&euro;<?php echo $_SESSION['prijsTotaal3']?></td>
              <?php $_SESSION['prijsTotaal'] += $_SESSION['prijsTotaal3'];?>
            </tr>
            <?php 
            }

              if(isset($_SESSION['bestelling'])){
            ?>
            <tr>
              <td class="totaal" colspan="2"> Totaal:</td>
              <td  class="totaal" >&euro;<?php echo $_SESSION['prijsTotaal'] ?></td>
            </tr>
            <?php 
            }
            
            ?>
          </table>
          </div>
  
          <?php
        }
        if(!isset($_SESSION['bestelling1']) && !isset($_SESSION['bestelling2']) && !isset($_SESSION['bestelling3'])){
          $winkelwagenEmpty = true;
        }else{
          $winkelwagenEmpty = false;
        }

        if($winkelwagenEmpty == false){
        ?> <div id="bestelling_form">
            <form action="winkelwagen.php" method="post" class="width">
            <button name="bestel" formaction="bestellen.php" class="bestel">bestellen</button>
            <button type="submit" formaction="webshop.php" id="verder">verder winkelen</button>
            <button name="legen" id="legen" >winkelwagen legen</button>
            </form>
           </div>

        <?php 
        }else{
          echo "Het lijkt erop dat de winkelwagen leeg is.";
          // class="bedankt" class="cleanbackground2"
        }
        if(isset($_POST['legen'])){
          header("location: winkelwagen.php");
          session_destroy(); 
       }

      
        ?>
        
      </div>
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