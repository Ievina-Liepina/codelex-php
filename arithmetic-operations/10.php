<?php
/*
See calculate-area.php https://github.com/codelex-io/php-syllabus/blob/main/php-basics/arithmetic-operations/calculate-area.php

Design a Geometry class with the following methods:

A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
Area = π * r * 2
Use Math.PI for π and r for the radius of the circle
A static method that accepts the length and width of a rectangle and returns the area of the rectangle. Use the following formula:
Area = Length x Width
A static method that accepts the length of a triangle’s base and the triangle’s height. The method should return the area of the triangle. Use the following formula:
Area = Base x Height x 0.5
The methods should display an error message if negative values are used for the circle’s radius, the rectangle’s length or width, or the triangle’s base or height.

Next write a program to test the class, which displays the following menu and responds to the user’s selection:

Geometry calculator:

Calculate the Area of a Circle
Calculate the Area of a Rectangle
Calculate the Area of a Triangle
Quit
Enter your choice (1-4):
Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu.
*/

function circle($radius): float
   {
       $area = pi() * pow($radius, 2);
       return round($area, 2);
    }

function rectangle($length, $width): float
    {
        return $length * $width;
    }

function triangle($base, $height): float
    {
        return $base * $height * 0.5;
    }

while (true){
    echo "Geometry calculator: ";
    echo PHP_EOL;
    echo PHP_EOL;

    echo '[1] Calculate the Area of a Circle' . PHP_EOL;
    echo '[2] Calculate the Area of a Rectangle' . PHP_EOL;
    echo '[3] Calculate the Area of a Triangle' . PHP_EOL;
    echo '[4] Quit' . PHP_EOL;

    $option = intval(readline("Enter your choice (1-4): "));

    switch ($option){
        case 1: //Calculate the Area of a Circle

          $radius = intval(readline("Enter radius: "));

         echo circle($radius);
         echo PHP_EOL;
         echo PHP_EOL;

            break;
        case 2: //Calculate the Area of a Rectangle

            $length = intval(readline("Enter length: "));
            $width = intval(readline("Enter width: "));

           echo rectangle($length, $width);
            echo PHP_EOL;
            echo PHP_EOL;

            break;
        case 3: //Calculate the Area of a Triangle

            $base = intval(readline("Enter base: "));
            $height = intval(readline("Enter height: "));

           echo triangle($base, $height);
           echo PHP_EOL;
           echo PHP_EOL;

            break;
        default; //Quit
        exit;
    }
}

