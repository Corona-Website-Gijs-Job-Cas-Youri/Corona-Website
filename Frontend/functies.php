<?php require('db_conn.php');


function locatie()
{
    $dbhost = "localhost";
    $dbuser = "gheetebrij_gheetebrij";
    $dbpass = "mxRKX8!qBZn2gUb^";
    $db = "gheetebrij_Corona";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n");

    if (isset($_POST['provincie'])) {

        $provincie = $_POST['provincie'];
        $sql = "SELECT Aantal_Besmet FROM besmet WHERE Provincie = '$provincie'";
        $result = mysqli_query($conn, $sql);
        

        $output = mysqli_fetch_assoc($result);
        echo 'In ' . $provincie . ' zijn ' . $output["Aantal_Besmet"] .  ' mensen besmet';
        
    }
}


