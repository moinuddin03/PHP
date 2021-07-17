<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Display</title>
    <style>
        body{
            padding: 0;
            margin:0;
            box-sizing: border-box;
        }
        h1{
          font-size: 20px;
          color:#000;
          text-align: center;
        }
        table{
            border-collapse: collapse;
            background-color:#fff;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
            border-radius: 10px;
            margin: auto;
        }
        th,td{
            border: 1px solid #f2f2f2;
            padding:8px 30px;
            text-align: center;
            color:gray;
        }
        th{
            text-transform: uppercase;
            font-weight: 500;
        }
        td{font-size: 13px;}
        .email-style{
            font-size:14px;
            color:gray;
            display: inline-block;
            background: #f2f2f2;
            border-radius: 2px;
            line-height:30px;
            padding:0 14px;
        }
        .post-class{
            text-transform:uppercase;
        }
        .fa{
            font-size:18px;
        }
        .fa-pencil-square-o{color: #63c76a;}
        .fa-trash{color: #ff0000;}
        a{
            text-decoration: none;
            display: flex;
            justify-content: center;

        }
    </style>
  </head>
  <body>
    

     <div class="main-div">
       <h1>List of candidates for web developer job</h1>
     </div>
     <div class="center-div">
        <div class="table-responsive">
             <table>
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>NAME</th>
                         <th>MOBILE</th>
                         <th>REFER</th>
                         <th>GENDER</th>
                         <th>DEGREE</th>
                         <th>EMAIL</th>
                         <th>LANGUAGE</th>
                         <th colspan="2">OPERATION</th>
                     </tr>
                 </thead>
                 <tbody>
                 <?php 
                    include 'connection.php';

                    $selectquery = "select * from  registration";
                    $query = mysqli_query($conn,$selectquery);
                    
                    while($result = mysqli_fetch_array($query))
                    {
                      ?>
                          <tr>
                          <td><?php echo $result['id']; ?></td>
                          <td><?php echo $result['name']; ?></td>
                          <td><?php echo $result['mobile']; ?></td>
                          <td><?php echo $result['refer']; ?></td>
                          <td><?php echo $result['gender']; ?></td>
                          <td><?php echo $result['degree']; ?></td>
                          <td><?php echo $result['email']; ?></td>
                          <td><?php echo $result['language']; ?></td>
                          <td><a href="update.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                          <td><a href="delete.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></i></td>
                          </tr>           
                     <?php   
                    }  
                   ?>                
                 </tbody>
             </table>
        </div>
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
      });
   </script>
  </body>
</html>