<?php
/*
Create a variable $plateNumber that stores your car plate number.
 Create a switch statement that prints out that it's your car in case of your number.
*/

$plateNumber = readline('Enter your plate number: ');

switch ($plateNumber) {
    case 'LV-8473':
        echo "It's your car!";
        break;
    case 'LV-7548':
        echo "It is your car!";
        break;
    case 'LV-5745':
        echo "Your car is in our database!";
        break;
    case 'EN-87657':
        echo "We found your car!";
        break;
    default:
        echo "We don\'t have your plate number in our database. Please check the number again!";
}

echo "\n";