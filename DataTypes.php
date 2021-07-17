<?php

// Integer
$int1 = 10;
echo gettype($int1), "   ".$int1;
echo "<br>";

// String
$str = "Moinuddin";
echo gettype($str),"   ".$str;
echo "<br>";


//Float  also called double
$flt = 10.365;
echo gettype($flt),"   ".$flt; 
echo "<br>";

// Boolean   value of ture is:1 AND value of false is:0
$bool = true;
echo gettype($bool),"   ".$bool;
echo "<br>";

// Array
$arr = array(1,2,3,4,5,'Moin');
echo gettype($arr),"   ".$arr[2];
echo "<br>";

?>