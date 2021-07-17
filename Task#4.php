<?php

$heads = 0;
$tails = 0;

for($i = 1; $i<=100; $i++)
{
    $randNum = rand(1,2);
    // echo $randNum;
    
    if($randNum == 1)
    {
       $heads++; 
    //    echo "Heads, I win! <br>";
    }
    else
    {
      $tails++;  
    //   echo "Tails, You win! <br>";
    }    
}


echo " There were {$heads} heads and {$tails} tails. <br>";

if($heads > $tails)
{
    echo "Heads, I win! <br>";
}
elseif($tails > $heads)
{
    echo "Tails, You win! <br>";
}
else
{
    echo"DRAW <br>";
}




?>