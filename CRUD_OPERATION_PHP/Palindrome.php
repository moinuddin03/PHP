<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<body>
    <div class="container">
      <form action="" method="POST">
      <h3>Palindrome Checker</h3>
      <h4>
         <?php

            if(isset($_POST['submit'])){
                $word = $_POST['palin'];

                $revword = strrev($word);

                if($word === $revword){
                    echo "Yes sit is palindrome";
                }else{
                    echo"No $word is not palindrome";
                }
            }

         ?>
      </h4>
       <fieldset>
         <textarea name="palin" id="" cols="30" rows="10" placeholder="Type Your Word...." required>
         </textarea>
       </fieldset>
       <fieldset>
         <button name="submit" type="submit" id="contact-submit">SUBMIT
         </button>
       </fieldset>
      </form>
    </div>
</body>
</html>