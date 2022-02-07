<?php
/*
Create a 2D associative array in 2nd dimension with fruits and their weight.
Create a function that determines if fruit has weight over 10kg. Create a secondary array with shipping costs per weight.
 Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro. Using foreach loop print out the values
 of the fruits and how much it would cost to ship this product.
*/

function fruitWeight($fruit, int $weight = 10): bool
{
    return $fruit['weight'] <= $weight;
}

$fruits = [
    [
        'name' => 'Bananas',
        'weight' => 9
    ],
    [
        'name' => 'Pears',
        'weight' => 10
    ],
    [
        'name' => 'Strawberries',
        'weight' => 5
    ],
    [
        'name' => 'Blueberries',
        'weight' => 5
    ],
    [
        'name' => 'Pineapples',
        'weight' => 20
    ],
    [
        'name' => 'apples',
        'weight' => 15
    ],
    [
        'name' => 'potatoes',
        'weight' => 17
    ]
];

$costs = [
    1 => 10,
    2 => 20
];



foreach($fruits as  $fruit) {
    echo "{$fruit['name']}";
    foreach ($costs as $cost)
        if(fruitWeight($fruit, $cost)) {
            echo " weight {$fruit['weight']}kg, shipping cost 1€.\n";
            break;
        } else {
            echo " weight {$fruit['weight']}kg, shipping cost 2€.\n";
            break;
        }
    }

echo PHP_EOL;