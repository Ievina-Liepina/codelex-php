<?php
//Create contion with 3checks, if value is greater than X, less than Y and is an even number;

$X = 45;
$Y = 86;

if ($X > 35){
    echo "Is greater";
} elseif ($Y < 56){
    echo "Is lesser";
} elseif ($Y % 2 == 0){
    echo "TRUE y";
} else {
    echo "None of the above";
}

echo "\n";
