<?php
// Given variables
$i = 98;
$d = 88.0;
$s = "Polyilaro ";

// Declare second integer, double, and String variables
$secondInteger;
$secondDouble;
$secondString;

// Read and save an integer, double, and String to your variables
echo "Enter an integer: ";
$secondInteger = intval(readline());

echo "Enter a double: ";
$secondDouble = doubleval(readline());

echo "Enter a string: ";
$secondString = readline();

// Print the sum of both integer variables on a new line
echo $i + $secondInteger . "\n";

// Print the sum of the double variables on a new line
echo number_format($d + $secondDouble, 1) . "\n";

// Concatenate and print the String variables on a new line
echo $s . $secondString . "\n";
?>
