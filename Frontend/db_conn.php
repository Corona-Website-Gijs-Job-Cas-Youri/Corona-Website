<?php

function OpenCon()
{
$dbhost = "localhost";
$dbuser = "gheetebrij_Gijs";
$dbpass = "mxRKX8!qBZn2gUb^";
$db = "gheetebrij_Corona";
$conn = mysqli_connect($dbhost, 
$dbuser, 
$dbpass, 
$db)
 or die("Connect failed: %s\n". $conn -> error);

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}


