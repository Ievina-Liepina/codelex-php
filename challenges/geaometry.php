<?php

abstract class Geometry
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function area(): float
    {
        return 12 * 5 / 4 + 1;
    }
}

class Circle extends Geometry
{
    public function getName(): string
    {
        $name = parent::getName();
        return 'AREA OFF: ' . $name;
    }

    public function area(): float
    {
        $radius = intval(readline('Enter radius: '));
        $area = pi() * pow($radius, 2);
        return round($area, 2);
    }
}

class Triangle extends Geometry
{
    public function getName(): string
    {
        $name = parent::getName();
        return 'AREA OFF: ' . $name;
    }

    public function area(): float
    {
        $height = intval(readline('Enter height: '));
        $base = intval(readline('Enter base: '));
        return $base * $height * 0.5;
    }
}

class Square extends Geometry
{
    public function getName(): string
    {
        $name = parent::getName();
        return 'AREA OFF: ' . $name;
    }

    public function area(): float
    {
        $length = intval(readline('Enter height: '));
        return $length * $length;
    }
}


$circle = new Circle('Circle');
$triangle = new Triangle('Triangle');
$square = new Square('Square');
$total = [];

while(true) {
    echo '[1] Calculate area for circle' . PHP_EOL;
    echo '[2] Calculate area for triangle' . PHP_EOL;
    echo '[3] Calculate area for square' . PHP_EOL;
    echo '[4] Total of all area\'s' . PHP_EOL;
    echo 'Any: Exit' . PHP_EOL;
    echo PHP_EOL;

    $select = intval(readline(">> ")) . PHP_EOL;

    if($select == 1)
    {
        echo PHP_EOL . $circle->getName() . ' is: ' .  $total[] = $circle->area() . PHP_EOL;
    } elseif ($select == 2)
    {
        echo PHP_EOL . $triangle->getName() . ' is: ' . $total[] = $triangle->area() . PHP_EOL;
    } elseif ($select == 3)
    {
        echo PHP_EOL . $square->getName() . ' is: ' . $total[] = $square->area() . PHP_EOL;
    } elseif ($select == 4)
    {
        $sum = 0;
        foreach ($total as $value)
        {
            $sum += (float)$value;
            echo $sum . PHP_EOL;
        }
    } else {
        exit;
    }
    echo PHP_EOL;
}