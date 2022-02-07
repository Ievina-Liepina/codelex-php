<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";

//todo check if an array contains a value user entered

echo PHP_EOL;

$user = intval(readline(">> "));


if (in_array($user, $numbers)) {
    echo "You're inputted number: $user - is in our data base!" . PHP_EOL;
} else {
    echo "You're inputted number: $user - doesn't match up. Please try again!" . PHP_EOL;
}
