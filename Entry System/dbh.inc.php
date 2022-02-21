<?php

$servername = "localhost";
$dbusername = "root";
$dbPassword ="";
$dbname ="login";

$conn = mysqli_connect($servername,$dbusername ,$dbPassword, $dbname);

if(!$conn){
    die("connection failed: " . mysqli_connect_error());
}


?>