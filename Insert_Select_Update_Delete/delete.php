<?php

include 'connection.php';

$id = $_GET['id'];

$deletequery = "delete from  registration where id=$id ";

$result = mysqli_query($conn,$deletequery);


if($result)
    {
       echo "<script>alert('Data deleted successful!');</script>" ;  
    }
    else
    {
       echo "<script>alert('Data not deleted!');</script>";
    }

     header('location:select.php');
?>