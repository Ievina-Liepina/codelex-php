<?php

require_once 'car.php';
require_once 'fuelGauge.php';
require_once 'odometer.php';
require_once 'tires.php';
require_once 'lights.php';
require_once 'accumulator.php';

$acc = new Accumulator();

$name = readline('Car name: ');
$fuelGaugeAmount = (int) readline('Fuel Gauge amount: ');
$driveDistance = (int) readline('Drive distance: ');

$car = new Car($name, 1234, $fuelGaugeAmount);

echo "------ " . $car->getName() . " ------";
echo PHP_EOL;

$pinCode = intval(readline('Enter pin: '));
$car->start($pinCode);

if($acc -> getEnergy() < 50 && !$car->hasStarted()){
    echo "{$car->getName()} has not started";
    echo PHP_EOL;
}

while ($car->getFuel() > 0 && $car->hasValidTires() && $car->hasStarted()) {
    echo "Fuel: " . $car->getFuel() . "l" . PHP_EOL;
    echo "Mileage: " . $car->getMileage() . "km" . PHP_EOL;

    foreach ($car->getTires() as $tire)
    {
        echo "Tire ({$tire->getName()}): " . $tire->getCondition() . "%" . PHP_EOL;
    }

    foreach ($car->getLights() as $light)
    {
        echo "Light ({$light->getBeam()}): " . $light->getBeamCondition() . "%" . PHP_EOL;
        if ($light->getBeam() == 'Close Lights' && $light->getBeamCondition() <= 20){
            exit("breaking");
        }
        
        if ($light->getBeam() == 'Far Lights' && $light->getBeamCondition() <= 30){
            exit("breaking");
        }
    }

    $car->drive($driveDistance);

    sleep(1);

    //echo "Fuel: " . $car->getFuel() . "l" . PHP_EOL;
    //echo "Mileage: " . $car->getMileage() . "km" . PHP_EOL;
}