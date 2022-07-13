<?php

$servername = "localhost";
$username = "uroot";
$password = "I95dev@123";

/* Create database connection with correct username and password/*
$connect=new mysqli($servername,$username,$password,$database);
/* Check the connection is created properly or not */

$connect=new mysqli($servername,$username,$password,$database);

if($connect->connect_error)
echo "Connection error:" .$connect->connect_error;
else
echo "Connection is created successfully"; ?>

?>
