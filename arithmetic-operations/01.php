<?php
/*
Write a program to accept two integers and return true if the either one is 15 or if
 their sum or difference is 15.
*/

function integers($x, $y): bool
{
    return $x == 15 || $y == 15 || $x + $y == 15 || abs($x - $y) == 15;
} //The abs() function returns the absolute (positive) value of a number:

var_dump(integers(15, 4));
var_dump(integers(10, 4));
var_dump(integers(1, 7));
var_dump(integers(11, 4));


echo "\n";