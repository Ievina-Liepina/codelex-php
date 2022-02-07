<?php
/*
https://github.com/codelex-io/php-syllabus/blob/main/php-basics/classes-and-objects/energy-drinks.php

A soft drink company recently surveyed 12,467 of its customers and found that approximately 14 percent of those
surveyed purchase one or more energy drinks per week. Of those customers who purchase energy drinks, approximately 64
percent of them prefer citrus flavored energy drinks.

Write a program that displays the following:

The approximate number of customers in the survey who purchased one or more energy drinks per week
The approximate number of customers in the survey who prefer citrus flavored energy drinks
 */

class SoftDrinks
{
    public int $surveyed = 12467;
    public float $purchased_energy_drinks = 0.14;
    public float $prefer_citrus_drinks = 0.64;

    public function calculate_energy_drinkers() : int
    {
        $buy_drinks = $this->surveyed * $this->purchased_energy_drinks;
        return round($buy_drinks);
    }

    public function calculate_prefer_citrus() : int
    {
        $citrus_drink = $this->calculate_energy_drinkers() * $this->prefer_citrus_drinks;
        return $citrus_drink;
    }
}

$drinks = new SoftDrinks();

echo "Total number of people surveyed: " . $drinks->surveyed . PHP_EOL;
echo "Approximately " . $drinks->calculate_energy_drinkers() . " bought at least one energy drink" . PHP_EOL;
echo $drinks->calculate_prefer_citrus() . " of those, " . "prefer citrus flavored energy drinks." . PHP_EOL;