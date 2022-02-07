<?php
/*
Create an associative array with objects of multiple persons.
Each person should have a name, surname, age and birthday. Using loop
 (by your choice) print out every persons personal data.
*/

$people = [
    [
        "name" => "Anna",
        "surname" => "Krista",
        "age" => 22,
        "birthday" => 03.08
    ],
    [
        "name" => "Roberts",
        "surname" => "Rojs",
        "age" => 34,
        "birthday" => 18.08
    ],
    [
        "name" => "Kaspars",
        "surname" => "Vīdznieks",
        "age" => 67,
        "birthday" => 12.11
    ],
    [
        "name" => "Signe",
        "surname" => "Lapa",
        "age" => 15,
        "birthday" => 22.07
    ]


];

foreach($people as $person){
    echo "\n";
    foreach($person as $info => $value){
        echo $info . ": " . $value . "\n";
    }
}
echo "\n";