<?php

// 1:Area of Circle  Area = PIr2

// 2:Area of Triangle Area = (1/2) bh

// 3:Area of Square Area = a*a

// 4:Area of Rectangle Area = l*w


// 1:
$pi = 3.141;
$rad = 5;

$areaOfCircle = $pi * $rad * $rad;
echo "Area of Circle is  $areaOfCircle";
echo "<br>";
// 2:
$height = 5;
$base = 3;

$areaOfTriangle = (1/2) * $height *$base;
echo "Area of Triangle is $areaOfTriangle";
echo "<br>";

// 3:
$a = 5;

$areaOfSquare = $a * $a;
echo "Area of Square is $areaOfSquare";
echo "<br>";

// 4:
$length = 5;
$width = 3;

$areaOfRectangle = $length * $width;
echo "Area of Rectangle is $areaOfRectangle";
echo "<br>";

?>