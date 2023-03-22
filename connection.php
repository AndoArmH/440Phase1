<?php

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "440";

$dbhost = "frpro2.fcomet.com"; // cpanel Shared IP Address
$dbuser = "auraxium_440group";
$dbpass = "im696fz3OG2g";
$dbname = "auraxium_440";
//port is 3306

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
	die("failed to connect");
}

echo "Logged in"
?>