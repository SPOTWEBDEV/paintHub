<?php

$connection = mysqli_connect('localhost', 'root', '', 'paint');

if (!$connection) {
         die('Error occurs');
}

$domain = 'http://localhost/paint/';
$sitename = 'PaintHub';

?>

<style>
         header :where(a, h1, h2, h3) {
                  color: black !important;
         }
</style>