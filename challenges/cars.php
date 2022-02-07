<?php

class Car{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
$car = new Car('Audi 20B');
$car1 = new Car('Mazda XXX');
$car2 = new Car('Kia D10');
$car3 = new Car('Mitsubishi');

class CarShop{
    public array $car_shop = [];

    public function available(Car  $car): Car
    {
        return $this->car_shop[] = $car;
    }
}

$available = new CarShop();
$available->available($car);
$available->available($car1);
$available->available($car2);
$available->available($car3);

$stock = $available;
$basket = [];

while(true) {

    echo "Welcome to CVS car shop!" . PHP_EOL;
    echo "You can check out our inventory and book your favorite car!" . PHP_EOL;
    echo PHP_EOL;

    echo "[1] Available" . PHP_EOL;
    echo "[2] Reserved" . PHP_EOL;
    echo "[3] Exit" . PHP_EOL;

    $select = readline(">> ");

    switch ($select) {
        case 1: //Available
            echo PHP_EOL;
            echo "Available: " . PHP_EOL;
            foreach ($stock as $index => $item) {
                foreach ($item as $i => $value) {
                    echo "[{$i}] {$value->name}" . PHP_EOL;
                }
            }

            $available = intval(readline("Select: "));

            $value = $item[$available] ?? null;

            $basket[] = $value;
            echo "Added {$value->name} to reserved list." . PHP_EOL;
            break;
        case 2:  //Reserved
            echo PHP_EOL;
            echo "Reserved: " . PHP_EOL;
            foreach ($basket as $c)
            {
                echo "{$c->name}" . PHP_EOL;
            }

            echo PHP_EOL;
            break;
        default:
            exit;
    }
}