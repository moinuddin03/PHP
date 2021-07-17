<?php

session_start();

if(!isset($_SESSION['name'])){
    header('Location:signin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome <?php echo  $_SESSION['name']; ?></h1>


    <button class="btn"><a href="logout.php">LOGOUT</a></button>
</body>
</html>