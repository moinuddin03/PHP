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
          <form action="updates.php" method="POST">
          <?php

              include 'connection.php';

               $ids = $_GET['id'];

               $showquery = "select * from jobregistration where id = {$ids}";

               $showdata = mysqli_query($conn,$showquery);

               $arrdata = mysqli_fetch_array($showdata);

                if(isset($_POST['submit']))
                {

                    $idupdate = $_GET['id']; 

                     $name = $_POST['name'];
                     $mobile = $_POST['mobile'];  
                     $degree = $_POST['degree'];
                     $email = $_POST['email'];
                     $refer = $_POST['refer'];
                     $jobpost = $_POST['jobpost'];

            //    $insertquery = "insert into jobregistration (name,degree,mobile,email,refer,jobpost) values('$name',' $degree',' $mobile','$email ',' $refer','$jobpost') ";

                $updatequery = "update jobregistration set id=$idupdate, name='$name',mobile='$mobile',degree='$degree',email='$email',refer='$refer',jobpost='$jobpost' where id=$idupdate ";

               $result = mysqli_query($conn,$updatequery);

               if($result)
               {
                ?>
               <script>
               alert('Data updated Successful');
              //  window.location="http://localhost/php/CRUD_OPERATION_PHP/display.php";
               </script>
               <?php
               }
               else
               {
               ?>
               <script>
               alert('Data updated Faild');
               </script>
               <?php
               }
             }

        ?>


              <div class="first">
                  <input class="form-group" type="text" name="name" placeholder="enter your name"  required="true" value="<?php echo $arrdata['name'] ?>">&nbsp;&nbsp;
                  <input class="form-group" type="text" name="degree" placeholder="enter your qualification"  required="true" value="<?php echo $arrdata['degree'] ?>">
                </div>
                
                <div class="second">
                    <input class="form-group" type="text" name="mobile" placeholder="mobile number"  required="true" value="<?php echo $arrdata['mobile'] ?>">&nbsp;&nbsp;
                    <input class="form-group" type="text" name="email" placeholder="email id"  required="true" value="<?php echo $arrdata['email'] ?>">
                </div>
                
                <div class="third">
                    <input class="form-group" type="text" name="refer" placeholder="Any references"  required="true" value="<?php echo $arrdata['refer'] ?>">&nbsp;&nbsp;    
                    <input class="form-group" type="text" name="jobpost"   readonly="true"  required="true" value="<?php echo $arrdata['jobpost'] ?>">
                </div>
                <div class="btn">
                      <a href="display.php" class="display-btn">Check Form</a>
                      &nbsp;&nbsp;&nbsp;
                     <input class="form-btn" type="submit" name="submit" value="UPDATE" >
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





