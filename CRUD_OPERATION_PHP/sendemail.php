<?php


$to_email = "moinuddinchudiwal22@gmail.com";
$subject = "For Demo";
$body = "Hi,This is a test email send by Moinuddin";
$headers = "From: mycomputer7054@gmail.com";

if (mail($to_email,$subject,$body,$headers)){
    echo"Email successfuly sent to $to_email....";

}else{
    echo"Mail sending fail";
}

?>