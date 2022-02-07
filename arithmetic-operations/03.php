<?php
/*
Write a program to produce the sum of 1, 2, 3, ..., to 100. Store 1 and 100 in variables lower bound and upper
 bound, so that we can change their values easily. Also compute and display the average. The output shall look like:

The sum of 1 to 100 is 5050
The average is 50.5
*/

$sum = 0;

for ($i = 1; $i <= 100; $i++){
        $sum += $i;
        echo "The sum of 1 to 100 is $sum\n";
        $average = $sum / $i;
        echo "The average is $average\n";
}


echo "\n";


