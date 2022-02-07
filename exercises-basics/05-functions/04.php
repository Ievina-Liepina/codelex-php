<?php
//Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.

function reached(stdClass $person, int $ageOf = 18): bool
{
    return $person->age >= $ageOf;
}


$_person = new stdClass();
$_person->name = "Ievina";
$_person->age = 22;

$__person = new stdClass();
$__person->name = "Anna";
$__person->age = 25;

$tree_person = new stdClass();
$tree_person->name = "Roberts";
$tree_person->age = 16;

$persona = [
    $_person, $__person, $tree_person
];

$age = intval(readline("Enter age: "));

foreach($persona as $per){
    echo "{$per->name}";
    if(reached($per, $age)){
        echo " has reached age of ". $age;
    }else{
        echo " has not reached age of ". $age;
    }
    echo PHP_EOL;
}

echo "\n";