<?php

$pass = "Moinuddin";

// $option = ['cost' => 12];//Extra password strong adding  cost

$str_pass = password_hash($pass,PASSWORD_BCRYPT);
echo $str_pass;


$pass_check = password_verify("Moinuddin",$str_pass);
if($pass_check)
{
    echo "Password match";
}
else
{
    echo "password not match";
}
?>