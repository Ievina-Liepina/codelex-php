<?php
class Point
{
    public int $x;
    public int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

function swapPoints($p1, $p2): string
{
    $swap = [$p1->x, $p1->y];
    [$p1->x, $p1->y] = [$p2->x, $p2->y];
    [$p2->x, $p2->y] = $swap;

    return $p1->x . ', ' . $p1->y . PHP_EOL;

}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

swapPoints($p1, $p2);
echo "(" . $p1->x . ", " . $p1->y . ")" . PHP_EOL;
echo "(" . $p2->x . ", " . $p2->y . ")" . PHP_EOL;