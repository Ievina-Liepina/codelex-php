<?php
/*
non associative ir bez "atslēgām"
Associative ir jebkas cits izņemot kārtas skaitļus

Create a non-associative array
 with 3 integer values and display the total sum of them.
*/
$array = [1, 2, 3];
var_dump($array);
echo "\n";
var_dump(array_sum($array));
echo "\n";
