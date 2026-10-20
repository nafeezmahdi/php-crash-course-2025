<?php

$str = "Hello, This is PHP!";
echo strtolower($str). "<br>";
echo strtoupper($str). "<br>";
echo str_replace("PHP", "Mahdi", $str). "<br>";
// Convert the string to lowercase using strtolower(), convert it to uppercase using strtoupper(), and replace "PHP" with "Mahdi" using str_replace(). The <br> tag moves each result to a new line in the browser.


echo str_word_count($str)."<br>";
// Count the number of words in the string using str_word_count(). The function returns the total number of words, and <br> moves the output to a new line in the browser.
