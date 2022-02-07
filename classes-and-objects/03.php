<?php
/*
For this exercise, you will design a set of classes that work together to simulate a car's fuel gauge and odometer.
The classes you will design are the following:

The FuelGauge Class: This class will simulate a fuel gauge. Its responsibilities are as follows:

*To know the car’s current amount of fuel, in liters.
*To report the car’s current amount of fuel, in liters.
*To be able to increment the amount of fuel by 1 liter. This simulates putting fuel in the car.
 ( The car can hold a maximum of 70 liters.)
*To be able to decrement the amount of fuel by 1 liter, if the amount of fuel is greater than 0 liters.
 This simulates burning fuel as the car runs.

The Odometer Class: This class will simulate the car’s odometer. Its responsibilities are as follows:

*To know the car’s current mileage.
*To report the car’s current mileage.
*To be able to increment the current mileage by 1 kilometer. The maximum mileage the odometer can store is 999,999
 kilometer. When this amount is exceeded, the odometer resets the current mileage to 0.
*To be able to work with a FuelGauge object. It should decrease the FuelGauge object’s current amount of fuel
by 1 liter for every 10 kilometers traveled. (The car’s fuel economy is 10 kilometers per liter.)

Demonstrate the classes by creating instances of each. Simulate filling the car up with fuel, and then run a loop that
increments the odometer until the car runs out of fuel. During each loop iteration, print the car’s current mileage and
amount of fuel.
*/

abstract class FuelGauge
{
    public int $currentFuel;
    public int $kilometersPerLiter;
    public int $kilometers_driven;

    public function __construct($maxFuel, $kilometersPerLiter)
    {
        $this->kilometersPerLiter = (int) $kilometersPerLiter = 10;
        $this->currentFuel = (int) $maxFuel = 70;
        $this->kilometers_driven = 0;
    }

    public function readFuelGauge() : int2
    {
        return $this->currentFuel;
    }

    public function addFuel(int $liters = 1) : int
    {
       return $this->currentFuel = $this->currentFuel + $liters;
    }
}

/*
Man nav ne jausmas kā mašīnu kilometru, litru lasīšana strādā :D Man nav ne jausmas kā mašīna strādā. Tāpēc man
nav ne jausmas vai tas kas ir izdarīts vispār ir pareizi, godīgi sakot.. Es pameklēju piemērus un apmēram kaut kā
tā mēģināju izdarīt.. Es ceru ka ir labi, bet man tiešām nav ne jausmas.
*/

class Odometer extends FuelGauge
{
    public float $max_kilometers = 999.999;

    public function readOdometer() : int
    {
        return $this->kilometers_driven;
    }

    public function drive($max_kilometers)
    {
        $liters_used = $max_kilometers / $this->kilometersPerLiter;
        if($liters_used > $this->currentFuel)
        {
            $max_kilometers = $this->kilometersPerLiter * $this->currentFuel;
            $this->kilometers_driven = $this->kilometers_driven + $max_kilometers;
            $this->currentFuel = 0;
        }else{
            $this->kilometers_driven =$this->kilometers_driven + $max_kilometers;
            $this->currentFuel = $this->currentFuel - $liters_used;
        }
    }

    public function __toString()
    {
        return 'Fuel: ' . $this->readFuelGauge() . ' liters, kilometers: ' . $this->readOdometer() . PHP_EOL;
    }
}

$audi = new Odometer(60, 10);

$audi->drive(100);

print_r($audi . '');

$audi -> drive(1000);

print($audi . '');

$audi -> addFuel(5);
$audi -> drive(10);

print($audi . '');
