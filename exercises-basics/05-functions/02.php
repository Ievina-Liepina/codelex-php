<?php
/*
Create a function that accepts 2 integer arguments. First argument is a base value and the second one is a value its been multiplied by.
 For example, given argument 10 and 5 prints out 50
*/

function int(int $x, int $y): int{
    return $x * $y;
}

echo "\n";

echo int(10, 5);

echo "\n";