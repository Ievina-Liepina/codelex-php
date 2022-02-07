<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: ";

echo PHP_EOL;
echo implode($numbers, "; ") . PHP_EOL;
echo PHP_EOL;

//todo
echo "Sorted numeric array: ";

echo PHP_EOL;

sort($numbers);

$sort = count($numbers);
for ($x = 0; $x < $sort; $x++){
    echo $numbers[$x] . "; ";
}
echo PHP_EOL;
echo PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: ";

echo PHP_EOL;
echo implode($words, "; ") . PHP_EOL;
echo PHP_EOL;

//todo
echo "Sorted string array: ";

echo PHP_EOL;

sort($words);

$sort = count($words);
for ($x = 0; $x < $sort; $x++){
    echo $words[$x] . "; ";
}
echo PHP_EOL;


