<?php

function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "gheetebrij_Corona";
$conn = mysqli_connect($dbhost, $dbuser,$dbpass, $db) or die("Connect failed: %s\n");

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}
 
