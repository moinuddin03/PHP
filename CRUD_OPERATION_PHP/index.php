<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Add css file -->
    <link rel="stylesheet" href="style.css?v=<?php echo time() ?>"></link>

    <script>
     if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
     }
    </script>

    <title>crud operation</title>
  </head>
  <body>
   
  <div class="parent">
    <div class="child">
     <h2>Apply for Web Developer Post</h2>
       <div class="user-form">
          <form action="#" method="POST">
              <div class="first">
                  <input class="form-group" type="text" name="name" placeholder="enter your name"  required="true">&nbsp;&nbsp;
                  <input class="form-group" type="text" name="degree" placeholder="enter your qualification"  required="true">
                </div>
                
                <div class="second">
                    <input class="form-group" type="text" name="mobile" placeholder="mobile number"  required="true">&nbsp;&nbsp;
                    <input class="form-group" type="text" name="email" placeholder="email id"  required="true">
                </div>
                
                <div class="third">
                    <input class="form-group" type="text" name="refer" placeholder="Any references"  required="true">&nbsp;&nbsp;    
                    <input class="form-group" type="text" name="jobpost"  value="Web Developer" readonly="true"  required="true">
                </div>
                <div class="btn">
                      <a href="display.php" class="display-btn">Check Form</a>
                      &nbsp;&nbsp;&nbsp;
                     <input class="form-btn" type="submit" name="submit" value="Register" >
                </div>
          </form>
       </div>
    </div>
  </div>



    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<!-- PHP WORK -->
<?php

include 'connection.php';

if(isset($_POST['submit']))
{
   $name = $_POST['name'];
   $degree = $_POST['degree'];
   $mobile = $_POST['mobile'];  
   $email = $_POST['email'];
   $refer = $_POST['refer'];
   $jobpost = $_POST['jobpost'];


   $insertquery = "insert into jobregistration (name,degree,mobile,email,refer,jobpost) values('$name',' $degree',' $mobile','$email ',' $refer','$jobpost') ";

   $result = mysqli_query($conn,$insertquery);

   if($result)
   {
     ?>
     <script>
     alert('Data insert Successful');
     </script>
     <?php
   }
   else
   {
     ?>
      <script>
     alert('Data insert Faild');
     </script>
     <?php
   }
}

?>


