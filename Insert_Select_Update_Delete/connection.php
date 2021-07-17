<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "crudyoutube";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn)
{
    echo "<script>alert('Connection Successful');</script>" ;
}
else
{
    echo "<script>alert('Connection Faild');</script>" ;
}


?>