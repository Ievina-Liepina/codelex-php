<?php
//Given object, use dump method, dump out all 3 values.


$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->surname = 50;

var_dump($person);
echo "\n";