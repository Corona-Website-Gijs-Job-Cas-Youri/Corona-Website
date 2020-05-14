<?php 
  session_start();

  require_once('db_conn.php');

  if(isset($_POST['bestellen'])){

  if(isset($_SESSION['bestelling1'])){
    $sql_insert1 = "INSERT INTO producten(Prod_Naam, Prod_Prijs)
    VALUES({$_SESSION['product1']}, {$_SESSION['prijsTotaal1']})";

    $result1 = mysqli_query($conn, $sql_insert1);
  }
  if(isset($_SESSION['bestelling2'])){
  $sql_insert2 = "INSERT INTO producten(Prod_Naam, Prod_Prijs)
    VALUES({$_SESSION['product2']}, {$_SESSION['prijsTotaal2']})";

    $result2 = mysqli_query($conn, $sql_insert2);
  }
  if(isset($_SESSION['bestelling3'])){
  $sql_insert3 = "INSERT INTO producten(Prod_Naam, Prod_Prijs)
    VALUES({$_SESSION['product3']}, {$_SESSION['prijsTotaal3']})";

    $result3 = mysqli_query($conn, $sql_insert3);
}



    $_SESSION['Email'] = $_POST['Email'];

    $sql_insert = "INSERT INTO bestelling(Email, Handschoenen, Mondkapjes, Zeep, Tot_Prijs) 
                    VALUES({$_SESSION['Email']}, {$_SESSION['bestelling1']}, {$_SESSION['bestelling2']}, {$_SESSION['bestelling3']}, {$_SESSION['prijsTotaal']})";

                    $result = mysqli_query($conn, $sql_insert);

                    header("location: bevestig.php");
  }
  
  
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>bestellen</title>
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
    <div id="site_content" class="cleanbackground2">
    
      <div id="content">
        <div id="container2">

      

        <form class="bedankt" method="post" action="bestellen.php">

        <p>Email:</p>
        <input class="input" name="Email" type="text" style="margin-bottom: 10px"></input>

        <button class="bestel" name="bestellen">bestellen</button>

        </form>
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
