<?php
class Shop{
    public string $name;
    public int $price;
    public int $amount;

    public function __construct(string $name, int $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }
}

$item = new Shop('Bread', 2, 3);
$item1 = new Shop('Milk', 1, 2);
$item2 = new Shop('Meat', 3, 1);
$item3 = new Shop('Coffee', 5, 1);
$item4 = new Shop('Paper', 4, 3);

class Store{
    public array $store = [];

    public function shopItems(Shop $shop): Shop
    {
        return $this->store[] = $shop;
    }

    public function totalSum() : int
    {
        $total = 0;
        foreach ($this->store as $item)
        {
            $total += $item->price * $item->amount;
        }
        return $total;
    }
}

$store = new Store();
$store->shopItems($item);
$store->shopItems($item1);
$store->shopItems($item2);
$store->shopItems($item3);
$store->shopItems($item3);

var_dump($store);

echo $item->name . " " . $item->price . "$ " . $item->amount . PHP_EOL;
echo $item1->name . " " . $item1->price . "$ " . $item1->amount . PHP_EOL;
echo $item2->name . " " . $item2->price . "$ " . $item2->amount . PHP_EOL;
echo $item3->name . " " . $item3->price . "$ " . $item3->amount . PHP_EOL;
echo $item4->name . " " . $item4->price . "$ " . $item4->amount . PHP_EOL;

echo "_____________" . PHP_EOL;

echo "Total: " . $store->totalSum() . "$" . PHP_EOL;