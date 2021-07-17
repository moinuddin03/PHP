<?php

$servername = 'localhost';
$username = "root";
$password = "";
$db = 'crudyoutube';


$conn = mysqli_connect($servername,$username,$password,$db);

 if ($conn)
 {
    echo "<script>alert('Connection Successfull')</script>";
 }
 else
 {
    echo "<script>alert('Connection Faild')</script>";
    die("Connection Faild" .mysqli_connect_error());
 }

?>