<?php

session_start();

if(isset($_SESSION['Userid'])){
    unset($_SESSION['Userid']);
}

header("Location: login.php");
die;