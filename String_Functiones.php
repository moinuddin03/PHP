<?php

// The strlen() function returns the length of a string

$strlen = "Hello world";
echo "The length of $strlen is :".strlen($strlen)."<br>";

// The str_word_count() functions return the length of a word

$strword = "Hello world";
echo "The word count of $strword is :".str_word_count($strword)."<br>";

// The strrev() function returns the reverses a string.
$strRev = "Hello world";
echo "The  $strRev revers is :".strrev($strRev)."<br>";

// The PHP strpos() function searches for a specific text within a string. 
echo strpos("Hello world!", "world");
echo "<br>";

// The PHP str_replace() function replaces some characters with some other characters in a string.
echo str_replace("world", "Dolly", "Hello world");

echo "<br>";

echo str_ireplace("GUJARAT", "Mumbai", "Hello Gujarat");

echo "<br>";

$name = "Moinuddin|Aabid|Chudiwal";
echo str_replace("|",", ","$name");

?>