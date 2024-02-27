<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$con) {
    // echo "connection established";
    die(mysqli_error($con));
} 

?>