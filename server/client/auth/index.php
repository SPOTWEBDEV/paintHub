<?php

session_start();

if(isset($_SESSION['login_id'])){
    $id =  $_SESSION['login_id'];   

    $check = mysqli_query($connection,"SELECT * FROM `client` WHERE `id`='$id'");
    if(mysqli_num_rows($check)){
       $whoIsLogin = $id;
    }
}



?>