<?php
/*
Create condition with int 50 and that has two separated varibales $y and $z,
 and prints "correct" if the variable is inside the range.
*/

$value = 50;
$y = 35;
$z = 65;
if (($value >= $y && $value <= $z) || ($value > $y && $value < $z)){
    echo "correct!";
}

echo "\n";