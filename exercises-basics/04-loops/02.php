<?php
//Create an array with integers (up to 10) and print them out using for loop.

$num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];  //Ja pievieno skaitli 0 vai 11, tad terminālī izprintē 10

for ($i = 1; $i < count($num) ; $i++) {  //Ja array sākas no nulles, $i =0, bet ja ir vienāds ar 1, sāks skaitīt no nulles
    echo "$i \n";
}

echo "\n";
