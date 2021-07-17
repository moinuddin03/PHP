<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
   </script>
    <style>
       body{
        background-color:#ff5d52;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       }
       .child{
           background-color:#3d3838;
           height: 350px;width: 800px;
           margin: 150px 400px 150px 400px;
           border-radius: 20px;
           box-shadow: 10px 10px 10px -7px ;

       }
       .left h2{
           margin-top: 100px!important;
           padding: 150px 50px;
           color: #ff5d52;
       }
       .right{
           float: right;
           
       }
       form{
         margin-top: 50px;
         margin-right: 50px;    
       }
       .form-group{
           background-color: #3d3838;
           color: #fff;
           text-align:center;
           border: 0;
           border-bottom: 1px solid #828282;
           outline: none;
           width: 250px;
           font-size:15px;
           font-weight:bold;
           
       }
       ::placeholder{
           color:#fff;
           font-size: 15px;
           word-spacing: 10px;
           font-weight: bold;
           padding: 0px 0px 0px 0px;
       }
       .select-style select{
           height:30px;
           width:250px;
           outline: none;
           font-weight: bold;
       }
       .btn-submit .submit{
           width: 100px;
           height: 40px;
           color: #fff;
           font-weight: bold;
           padding: 10px;
           background-color:#ff5d52 ;
           outline:none;
           border: 0;
           border-radius: 10px;
       }
       .showdata{
           color: #fff;
           margin-top: 50px;
           font-size: 20px;
       }
    </style>

</head>
<body>

<div class="parent">
   <div class="child">
      <div class="right">
        <form action="" method="POST" autocomplete="off">
            <div>
               <input class="form-group" type="text" name="num1" placeholder="ENTER NUMBER" required="true" />
            </div>
                  <br><br>
            <div>
               <input class="form-group" type="text" name="num2" placeholder="ENTER NUMBER" required="true" />
            </div>
                  <br>
            <div class="select-style">
              <select name="operation">
                 <option value="add">ADDITION</option>
                 <option value="sub">SUBTRACTION</option>
                 <option value="mult">MULTIPLICATION</option>
                 <option value="div">DIVISION</option>
              </select>
            </div>
                 <br>
            <div class="btn-submit">
               <input class="submit" type="submit" value="SUBMIT" name="submit" />
            </div>
        </form>

        <div class="showdata">
          <p> 
              <?php

                  if(isset($_POST['submit']))
                  {
                      $num1 = $_POST['num1'];
                      $num2 = $_POST['num2'];

                      // echo "{$num1} {$num2}";
                    
                      $operation = $_POST['operation'];
                      
                      switch($operation)
                      {
                          case "add": $sum = $num1 + $num2;
                            echo "The addition of two number is {$sum}";
                            break;
                          
                          case "sub": $sub = $num1 - $num2;
                            echo "The subtraction of two number is {$sub}";
                            break;  

                          case "mult": $mult = $num1 * $num2;
                            echo "The multiplication of two number is {$mult}";
                            break;  
                              
                          case "div": $div = $num1 / $num2;
                            echo "The division of two number is {$div}";
                            break;  

                          default: echo "Sorry its not exist";  
                      }
                  }
                     
              ?>
          </p>
        </div>

      </div>
      <div class="left">
        <h2>PHP<br> CALCULATOR</h2>
      </div>
   </div> 
</div>

</body>
</html>