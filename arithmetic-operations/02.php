<?php
/*
Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
 or “Even Number” otherwise. The program shall always print “bye!” before exiting.
*/
function CheckOddEven($number): int{
    if($number % 2 == 0){
        echo "$number is odd Number!\n";
    } else {
        echo "$number is even Number!\n";
    }
    exit("bye!\n");
}

echo CheckOddEven(intval(readline("Enter number: ")));

echo "\n";