<?php

$age = 18;
$hasTicket = true;
$hasID = false;
$isBanned = false;
$task1 = true;
$task2 = false;

// 1. AND (&&): Returns true when both conditions are true.
if ($age >= 18 && $hasTicket) {
    echo "AND: You can enter!<br>";
}

// 2. OR (||): Returns true when at least one condition is true.
if ($hasID || $hasTicket) {
    echo "OR: You have permission to enter!<br>";
}

// 3. NOT (!): Reverses the Boolean value.
if (!$isBanned) {
    echo "NOT: You are not banned!<br>";
}

// 4. XOR (xor): Returns true when exactly one condition is true.
if ($task1 xor $task2) {
    echo "XOR: Exactly one task is completed!<br>";
}

// 5. AND (and): Another AND operator; has lower precedence than &&.
if (($age >= 18) and $hasTicket) {
    echo "AND keyword: Both conditions are true!<br>";
}

// 6. OR (or): Another OR operator; has lower precedence than ||.
if (($hasID == true) or $hasTicket) {
    echo "OR keyword: At least one condition is true!<br>";
}

// Store the day number in a variable.
$day = 3;

// Check the value of $day.
switch ($day) {
    case 1:
        echo "Monday";
        break;

    case 2:
        echo "Tuesday";
        break;

    case 3:
        echo "Wednesday";
        break;

    case 4:
        echo "Thursday";
        break;

    case 5:
        echo "Friday";
        break;

    default:
        echo "Invalid day!";
}

