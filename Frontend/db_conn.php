<?php

function OpenCon()
{
$dbhost = "localhost";
$dbuser = "gheetebrij_gheetebrij";
$dbpass = "bHdmHP1FrKHH";
$db = "gheetebrij_Corona";
$conn = mysqli_connect($dbhost, $dbuser,$dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}


