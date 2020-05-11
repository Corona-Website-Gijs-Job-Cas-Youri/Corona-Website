<?php require_once('db_connect.php');

function locatie()
{
    include('C:\xampp\htdocs\Corona-Website\Frontend/db_conn.php');
    OpenCon();
    $provincie = $_POST['provincie'];
    $sql = "SELECT `Aantal_Besmet` FROM `besmet` WHERE `Provincie` == $provincie";
    $result = mysqli_query(OpenCon(), $sql);
    $output = mysqli_fetch_assoc($result);
}
