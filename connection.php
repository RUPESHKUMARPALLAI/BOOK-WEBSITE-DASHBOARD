<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="books_portal";

$con=mysqli_connect($servername,$username,$password,$database);
 

if(!$con){
    die("connection unsuccessful".mysqli_connect_error());
}

?>
