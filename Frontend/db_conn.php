<?php

function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "website";
$conn = mysqli_connect($dbhost, $dbuser,$dbpass, $db) or die("Connect failed: %s\n");

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}

$dbuser_cpanel = "gheetebrij_gheetebrij";
$dbpass_cpanel = "mxRKX8!qBZn2gUb^";
$dbnaam = "gheetebrij_Corona";