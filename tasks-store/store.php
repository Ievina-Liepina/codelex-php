<?php
$personData = explode(' ', file_get_contents("ieva.txt"));
//var_dump($personData);die;

$person = new stdClass();
$person->name = $personData[0];
$person->cash = (int) $personData[1];



function createProduct(string $name, int $price):stdClass
{
    $product = new stdClass();
    $product->name = $name;
    $product->price = $price;
    return $product;
}
/*
$products = [
    createProduct('Lays', 1.99),
    createProduct('Coca-cola', 1.76),
    createProduct('Hot-dog', 2.00),
    createProduct('Sandwich', 1.99),
    createProduct('E-talons', 1.15),
];
*/

$products = [];

if(($handle =  fopen("product.csv", "r")) !== false)
{
    while (($data = fgetcsv($handle, 1000, ",")) !== false){
       [$name, $price] = $data;
       $products[] = createProduct($data[0], $data[1]);
        }
    fclose($handle);
    }


echo "{$person->name} has {$person->cash}$" . PHP_EOL . PHP_EOL;

$basket = [];

if(file_exists('basket.txt'))
{
    $basket = explode(',', file_get_contents('basket.txt'));;
}

while(true) {

    echo '[1] Purchase' . PHP_EOL;
    echo '[2] Checkout' . PHP_EOL;
    echo '[Any] Exit' . PHP_EOL;

    $option = intval(readline("Select an option: "));

    switch ($option) {
        case 1: //Purchase
            foreach ($products as $index => $product)
            {
                echo "[{$index}] {$product->name} {$product->price}$" . PHP_EOL;
            }

            $selectProduct = intval(readline("Select product: "));

            $product= $products[$selectProduct] ?? null;

            if ($product === null)
            {
                echo "Product not found." . PHP_EOL;
                exit;
            }

            $basket[] = $selectProduct;

            echo "Added {$product->name} to basket." . PHP_EOL;
            break;
        case 2: //Checkout
            $totalSum = 0;
            foreach ($basket as $productIndex)
            {
                $product = $products[$productIndex];
                $totalSum += $product->price;
                echo "{$product->name}" . PHP_EOL;
            }
            echo "__________________" . PHP_EOL;
            echo "Total: $totalSum $";
            echo PHP_EOL;

            echo $person->cash >= $totalSum ? "Successful payment." : "Payment failed. Not enough cash.";
            echo PHP_EOL;

            //clear file
            if(file_exists('basket.txt')) {
                unlink('basket.txt');
            }
            exit;
        default: //exit
            $productIndex = implode(',', $basket);
            file_put_contents('basket.txt', $productIndex);
            echo "Save the basket.";
            exit;
    }
}
