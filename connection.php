<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "440";

//connect to database
//if statement if connection fails

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect");
}