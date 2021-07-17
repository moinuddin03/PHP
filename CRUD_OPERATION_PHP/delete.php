<?php

include 'connection.php';


$id = $_GET['id'];

$deletequery = "delete from jobregistration where id=$id ";

$query = mysqli_query($conn,$deletequery);

if($query)
   {
     ?>
     <script>
     alert('Data delete  Successful');
     </script>
     <?php
   }
   else
   {
     ?>
      <script>
     alert('Data delete Faild');
     </script>
     <?php
   }
 
 header('location:display.php');

?>