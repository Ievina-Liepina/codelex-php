<?php
/*
Write a method named swapPoints that accepts two Points as parameters and swaps their x/y values.

Consider the following example code that calls swapPoints:

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
swapPoints(p1, p2);
echo "(" . p1.x . ", " . p1.y . ")";
echo "(" . p2.x . ", " . p2.y . ")";
The output produced from the above code should be:

(-3, 6)
(5, 2)
 */

class SwapCoord
{
    public int $x;
    public int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints(): string
    {
        $swap = $this->x;
        $this->x = $this->y;
        $this->y = $swap;
        return $this->x . ', ' . $this->y . PHP_EOL;
    }
}


$swap = new SwapCoord(-3,6);
$swap1 = new SwapCoord(5,2);
echo $swap->swapPoints();
echo $swap1->swapPoints();