<?php
/*
Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string. Create a for loop that iterates
 non-associative array using php in-built function that determines count of elements in the array. Create a function that doubles
 the integer number. Within the loop using php in-built function print out the double of the number value (using your custom function).
*/

$five = [1, 2, 3, 3.5, "four"];

for ($i = 0; $i < count($five); $i++) {
    echo $five[$i] . "\n";
}

echo PHP_EOL;

/*
The sizeof() function returns the number of elements in an array.
The sizeof() function is an alias of the count() function.
 */

function double($arr): array
{
    for($i = 0; $i < sizeof($arr); $i++){
        $arr[$i] += $arr[$i];
    }
    return $arr;
}

print_r(double($five));


echo PHP_EOL;


