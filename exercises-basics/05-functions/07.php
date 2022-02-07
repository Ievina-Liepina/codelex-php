<?php
/*
Imagine you own a gun store. Only certain guns can be purchased with license types. Create an object (person) that will be the
 requester to purchase a gun (object) Person object has a name, valid licenses (multiple) & cash. Guns are objects stored within an array.
 Each gun has license letter, price & name. Using PHP in-built functions determine if the requester (person) can buy a gun from the store.
*/


$person = new stdClass();
$person->name = "Imants";
$person->cash = 2580;
$person->license = ['A', 'C'];

function BuyGun(string $name, int $price, string $license = null):stdClass
{
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->license = $license;
    $weapon->price = $price;
    return $weapon;
}

$weapons = [
    BuyGun('Ak47', 1803, 'C'),
    BuyGun('Deagle', 657 , 'A'),
    BuyGun('Knife', 158),
    BuyGun('Glock', 754 , 'A'),
];

echo "{$person->name} has {$person->cash}$" . PHP_EOL . PHP_EOL;

$basket = [];

while(true) {

    echo '[1] Purchase' . PHP_EOL;
    echo '[2] Checkout' . PHP_EOL;
    echo '[Any] Exit' . PHP_EOL;

    $option = intval(readline("Select an option: "));

    switch ($option) {
        case 1: //Purchase
            foreach ($weapons as $index => $weapon) {
                echo "[{$index}] {$weapon->name} ({$weapon->license}) {$weapon->price}$" . PHP_EOL;
                print_r($weapons);die;
            }

            $selectWeapon = intval(readline("Select weapon: "));

            $weapon = $weapons[$selectWeapon] ?? null;

            if ($weapon === null) {
                echo "Weapon not found." . PHP_EOL;
                exit;
            }

            if (($weapon->license !== null) && !in_array($weapon->license, $person->license)) {
                echo "Invalid license." . PHP_EOL;
                exit;
            }

            $basket[] = $weapon;

            echo "Added {$weapon->name} to basket." . PHP_EOL;
            break;
        case 2: //Checkout
            $totalSum = 0;
            foreach ($basket as $weapon) {
                $totalSum += $weapon->price;
                echo "{$weapon->name}" . PHP_EOL;
            }
            echo "__________________" . PHP_EOL;
            echo "Total: $totalSum $";
            echo PHP_EOL;

            if ($person->cash >= $totalSum) {
                echo "Successful payment.";
            } else {
                echo "Payment failed. Not enough money.";
            }

            echo PHP_EOL;

            exit;
        default: //exit
            exit;
    }
}


