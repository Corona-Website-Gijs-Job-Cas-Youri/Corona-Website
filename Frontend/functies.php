<?php require('db_conn.php');


function locatie()
{
    OpenCon();
    $provincie = $_POST['provincie'];
    $sql = "SELECT `Aantal_Besmet` FROM `besmet` WHERE `Provincie` == $provincie";
    $result = mysqli_query(OpenCon(), $sql);
    $output = mysqli_fetch_assoc($result);
}