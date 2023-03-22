<?php
//session is a variable that can be accessed from by any page
//superglobal variable
session_start();

//we put user id on session on every page to make sure
//its the same user on every page and theyre logged in

include("connection.php");
include("functions.php");

$user_data = check_login($con);
//function that will take user data and check if theyre logged in
//$con is connection to database

date_default_timezone_set('America/Los_Angeles');
$date = date('Y-m-d h:i:s', time());
echo "$date";
?>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>

<body>
	<a href="logout.php">Logout</a>
	<h2>Home Page</h2>
	<br><br>
	<div class="p-5">
		hello
	</div>
</body>

</html>