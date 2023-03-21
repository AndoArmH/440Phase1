<?php

function check_login($con)
{
    //checking to see if the user id is in db and if session is 
    //logged in thru this user id
    if(isset($_SESSION['username']))
    {
        $id = $_SESSION['username'];
        $query = "select * from user where username = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }

    }//end if

    //redirect to login if fails 
    header("Location: login.php");
    die;
}//close check_login