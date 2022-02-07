<?php
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int. Take note that it is the same as factorial of N.

function factorial($n)
{
    return ($n == 1 || $n == 0) ? 1:  //Kods, lai atrastu factorialu
        $n * factorial($n - 1);
}


$num = intval(readline("Enter number: "));
echo "Factorial of ", $num, " is ", factorial($num);
echo "\n";