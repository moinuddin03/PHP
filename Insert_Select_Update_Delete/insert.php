<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <title>INSERT</title>
  </head>
  <body>
   

  <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Please fill all the details carefully. This form can change your life</p>
                        <a href="select.php"><input type="button"  name="" value="CHECK FORM"/></a> <br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply For Company Placement</h3>
                                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name *" value="" required="true" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number *" value="" required="true" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="refer" class="form-control" placeholder="Any References *" value="" required="true" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="degree" class="form-control" placeholder="Enter Your Qualification *" value="" required="true" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control"  placeholder="Enter Your Email id *" value="" required="true" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="language" class="form-control" placeholder="Prefered Language *" value="" required="true" />
                                        </div>
                                        <input type="submit" name="insert" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


<!-- Data Insert Query -->
<?php

include 'connection.php';

if(isset($_POST['insert']))
{
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $refer = $_POST['refer'];
    $gender = $_POST['gender'];
    $degree = $_POST['degree'];
    $email = $_POST['email'];
    $language = $_POST['language'];
    
    
 
    $insertquery ="insert into registration (name,mobile,refer,gender,degree,email,language) values('$name','$mobile','$refer','$gender','$degree','$email','$language') ";
    
    $result = mysqli_query($conn,$insertquery);

    
    if($result)
    {
       echo "<script>alert('Data insert successful!');</script>" ;  
    }
    else
    {
       echo "<script>alert('Data not inserted!');</script>";
    }


} 

?>