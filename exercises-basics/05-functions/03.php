<?php
/*
Create a person object with name, surname and age. Create a function that will determine if the person has reached 18 years of age.
 Print out if the person has reached age of 18 or not.
*/

$person = new stdClass();
$person->name = "Olafs";
$person->surname = "Krastiņš";
$person->age = 17;

function determine(stdClass $person): bool{
    return $person->age >= 18;
}


echo "{$person->name} {$person->surname} ";
echo determine($person) ? "is an adult." : "is underage.";

/*Vai arī garais variants:

if (determine($person)){
    echo "is an adult.";
} else {
    echo "is underage.";
}
*/
echo "\n";
