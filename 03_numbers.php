<?php
$x = 25;
$y = 2;

echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x ** $y . "<br>";

$y++;
echo $y . "<br>";

$y--;
echo $y . "<br>";

$y += 5;
echo $y . "<br>";

$y -= 2;
echo $y . "<br>";

echo min($x, $y) . "<br>";
echo max($x, $y) . "<br>";

// Perform arithmetic operations using $x and $y: addition (+), subtraction (-), and exponentiation (**). Increment ($y++) increases $y by 1, while decrement ($y--) decreases it by 1. The compound assignment operators (+= and -=) add to or subtract from the existing value of $y. Finally, min() returns the smallest value, max() returns the largest value, and <br> displays each result on a new line in the browser.