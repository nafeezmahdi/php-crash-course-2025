<?php

// This is a single-line comment.
// PHP will ignore this line when executing the code.

/*
This is a multi-line comment.
You can write several lines inside it.
PHP will ignore everything between the comment markers.
*/

// ========================================
//  DECLARING VARIABLES
// ========================================

$name = "Mahdi";
// A string variable stores text.
$age = 32;
// An integer variable stores a whole number.
$isFather = false;
// A Boolean variable stores either true or false.
$money = 215.33;
// A float variable stores a decimal number
$salary = null;
// NULL means the variable has no value.


// ========================================
// DISPLAYING VARIABLES USING ECHO
// ========================================

echo $name;
// Display the value of the name variable.
echo "<br> Hello " . $name . "!<br>";
// <br> creates a new line in the browser.
// The dot (.) joins two strings or values.
// This is called concatenation.
echo "Hello {$name}!<br>";
// Double quotes allow PHP to insert the variable's value.
echo 'Hello {$name}!<br>';
// Single quotes do not insert the variable's value.
// Therefore, {$name} is displayed as literal text.
echo  $age . "<br>";
echo  $isFather . "<br>";
echo  $money . "<br>";
echo  $salary . "<br>";
// Display the age and then create a new line.
// A Boolean false value produces no visible output.
// Display the decimal value.
// NULL produces no visible output.

echo gettype($name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($isFather) . "<br>";
echo gettype($money) . "<br>";
echo gettype($salary) . "<br>";
// Display the data type of each variable: $name (string), $age (integer), $isFather (boolean), $money (double), and $salary (NULL). The <br> tag moves each result to a new line in the browser.

print_r($name);
echo "<br>";
var_dump($name);
echo "<br>";
// Display the variable's value using print_r() and var_dump(). print_r() displays the value in a readable format, while var_dump() displays both the data type and value. The <br> tag moves the output to a new line in the browser.

$name = 32;
echo gettype($name);
echo "<br>";
// Reassign the value of $name to the integer 32, then display its data type using gettype(). The <br> tag moves the output to a new line in the browser.

var_dump(is_string($name));
echo "<br>";
var_dump(is_int($name));
echo "<br>";
var_dump(is_int($age));
echo "<br>";
var_dump(is_bool($isFather));
echo "<br>";
var_dump(is_double($money));
echo "<br>";
var_dump(is_float($money));
echo "<br>";
var_dump(is_null($salary));
echo "<br>";
// Check the data types of variables using PHP's type-checking functions. is_string() checks whether a value is a string, is_int() checks for an integer, is_bool() checks for a Boolean, is_double() and is_float() check for floating-point numbers, and is_null() checks whether a variable is NULL. var_dump() displays each result as true or false, while <br> moves each result to a new line in the browser.

var_dump(isset($name));
echo "<br>";
var_dump(isset($country));
echo "<br>";
var_dump(isset($salary));
echo "<br>";
// Check whether the variables are set and their values are not NULL using isset(). It returns true if a variable exists and is not NULL, and false if the variable is undefined or its value is NULL. var_dump() displays the result as true or false, while <br> moves each result to a new line in the browser.

