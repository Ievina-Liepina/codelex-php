<?php
/*
Create a class Product that represents a product sold in a shop. A product has a price, amount and name.

The class should have:

A constructor Product(string name, float startPrice, int amount)
A function printProduct() that prints a product in the following form:
Banana, price 1.1, amount 13
Test your code by creating a class with main method and add three products there:

"Logitech mouse", 70.00 EUR, 14 units
"iPhone 5s", 999.99 EUR, 3 units
"Epson EB-U05", 440.46 EUR, 1 units
Print out information about them.

Add new behaviour to the Product class:

possibility to change quantity
possibility to change price
Reflect your changes in a working application.
 */

class Product
{
    public string $name;
    public float $price;
    public int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }
}

$product = new Product("Logitech mouse", 70.00, 14);
$product1 = new Product("iPhone 5s", 999.99, 3);
$product2 = new Product("Epson EB-U05", 440.46, 1);

function printProduct($product): string
{
    return $product->name . ', price ' . $product->price . ' EUR, amount ' . $product->amount . ' units' . PHP_EOL;
}

echo printProduct($product);
echo printProduct($product1);
echo printProduct($product2);
echo PHP_EOL;

while (true)
{
    echo '[1] Change price' . PHP_EOL;
    echo '[2] Change amount' . PHP_EOL;
    echo 'Exit'. PHP_EOL;

    $option = readline("Choose what to change: ");

    if($option == 1)
    {
        echo 'Change price for: ' . PHP_EOL;
        echo '[1] "Logitech mouse"' . PHP_EOL;
        echo '[2] "iPhone 5s"' . PHP_EOL;
        echo '[3] "Epson EB-U05"' . PHP_EOL;

        $select = readline("Choose product: ");
        if($select == 1)
        {
            $product->price = readline('Enter price: ');

            echo $product->name . ', price ' . $product->price. ' EUR, amount ' . $product->amount . ' units' . PHP_EOL;
        } elseif ($select == 2)
        {
            $product1->price = readline('Enter price: ');

            echo $product1->name . ', price ' . $product1->price . ' EUR, amount ' . $product1->amount . ' units' . PHP_EOL;
        } elseif ($select == 3)
        {
            $product2->price = readline('Enter price: ');

            echo $product2->name . ', price ' . $product2->price . ' EUR, amount ' . $product2->amount . ' units' . PHP_EOL;
        } else {
            exit;
        }
    } elseif ($option == 2){
        echo 'Change amount for: ' . PHP_EOL;
        echo '[1] "Logitech mouse"' . PHP_EOL;
        echo '[2] "iPhone 5s"' . PHP_EOL;
        echo '[3] "Epson EB-U05"' . PHP_EOL;

        $change = readline("Choose product: ");
        if ($change == 1)
        {
            $product->amount = readline('Enter amount: ');

            echo $product->name . ', price ' . $product->price . ' EUR, amount ' . $product->amount . ' units' . PHP_EOL;
        } elseif ($change == 2)
        {
            $product1->amount = readline('Enter amount: ');

            echo $product1->name . ', price ' . $product1->price . ' EUR, amount ' . $product1->amount . ' units' . PHP_EOL;
        } elseif ($change == 3)
        {
            $product2->amount = readline('Enter amount: ');

            echo $product2->name . ', price ' . $product2->price . ' EUR, amount ' . $product2->amount . ' units' . PHP_EOL;
        } else {
            exit;
        }
    } else {
        exit;
    }
    echo PHP_EOL;
}