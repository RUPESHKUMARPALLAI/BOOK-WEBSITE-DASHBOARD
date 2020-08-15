<?php

$servername = "localhost";
$username = "username";
$password = "password";
$database="book_portal";

$con=mysqli_connect($servername,$username,$password,$database);
 

if(!$con){
    die("connection unsuccessful".mysqli_connect_error());
}

?>