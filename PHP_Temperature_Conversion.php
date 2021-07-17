<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Temperature_Conversion</title>
</head>
<style>
 *{padding: 0;margin: 0;box-sizing: border-box;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}

 h1{text-align: center; line-height: 20vh;color: #6c63ff;}

 .main-div{
     width: 100%;height: 80vh;
     display: flex;
     justify-content: space-around;
     align-items: center;
 }

 .left-side{
      background-color:#dfe6e9;
      border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
 }

 .left-side img{
     max-width: 400px;
     height:auto;
 }

 .right-side{
     width:400px;
     height: 300px;
     background-color:#dfe6e9;
     border-radius:15px;
     display: flex;
     flex-direction: column;
     justify-content: center;
     align-items:center;
     text-align: center;
 }

 .input1{
     width:250px;
     height: 40px;
     padding:5px;
     outline: none;
     border-radius: 1px solid gray;
     border-radius: 5px;
 }

 .selection{
     width:100%;
     margin:20px 0;
 }

 .btn{
     padding:10px 16px;
     border-radius:5px;
     outline: none;
     border:none;
     background-color: #6c63ff;
     color: #fff;
     font-size: 0.9rem;
 }

 p{
     margin:20px 0 0 0;
 }
</style>
<body>
    
<header>
  <h1>Temperature Conversion</h1>
  <div class="main-div">

    <div class="left-side">
       <img src="#" alt="Image not available">
    </div>

    <div class="right-side">
      <form method="POST" autocomplete="off">
         <input type="text" name="num" placeholder="Enter Your Number" class="input1" required="true">
         <div class="selection">
           <label>Celc</label>
           <input type="radio" name="units" value="cel">

           <label>Faren</label>
           <input type="radio" name="units" value="feh">
         </div>
           <input type="submit" name="submit" value="Convert Now" class="btn">
      </form>

      <div>
        <p>
            <?php 
                
              if(isset($_POST['submit']))
              {
                      $num = $_POST['num'];
                      $temp = $_POST['units'];

                      if($temp == "cel")
                      {
                          $result = $num * 9 / 5 + 32;
                          echo "The conversion value of cel in faren is" .$result;
                      }
                      else
                      {
                          $result = ($num - 32) * 5 / 9;
                          echo "The conversion value of faren in cel is" .$result;
                      }
              }


            ?>
        </p>
      </div>
    </div>

  </div>
</header>

</body>
</html>