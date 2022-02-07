<?php

class Weapon{
    public string $name;
    public string $power;


    public function __construct(string $name, int $power)
    {
        $this->name= $name;
        $this->power = $power;
    }
}

$weapon = new Weapon('Bayonet', 30);
$club = new Weapon('Club', 15);
$dagger = new Weapon('Dagger', 9);



class Inventory{
    public array $inventory = [];

    public function showWeapon(Weapon $weapon): Weapon
    {
      return  $this->inventory[] = $weapon;
    }
}

$inventory = new Inventory();
$inventory->showWeapon($weapon);
$inventory->showWeapon($club);
$inventory->showWeapon($dagger);


echo "Inventory: " . PHP_EOL;
echo "Name: " . $weapon->name . " - " . "Power: " . $weapon->power . PHP_EOL;
echo "Name: " . $club->name . " - " . "Power: " . $club->power . PHP_EOL;
echo "Name: " . $dagger->name . " - " . "Power: " . $dagger->power . PHP_EOL;
