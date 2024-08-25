<?php
$host = "localhost";
$user ="root";
$pass = "";
$db_name = "ecom_db";
 $conn = mysqli_connect($host,$user,$pass,$db_name);
 if (!$conn){
    echo "error". mysqli_connect_error();
 }
?>