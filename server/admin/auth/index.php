<?php

session_start();
$url = $domain. 'admin/login.php';
echo $_SESSION['admin_login'];
if(!isset($_SESSION['admin_login'])){
    header('location:' . $url);
}



?>