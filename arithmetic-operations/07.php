<?php
/*
Modify the example program to compute the position of an object after falling for 10 seconds,
 outputting the position in meters. The formula in Math notation is:

https://github.com/codelex-io/php-syllabus/blob/main/php-basics/arithmetic-operations/gravity-formula.png

Note: The correct value is -490.5m.
*/
class Gravity
{
    //x(t) = 0.5 * (at)^2 + v(t) + x
    public $a = -9.81;
    public $t = 10;
    public $Vi = 0.0;
    public $Xi = 0.0;

    function __construct()
    {
        $this->a = -9.81;
        $this->t = 10;
        $this->Vi = 0.0;
        $this->Xi = 0.0;

    }

        public function calcullate(): string
        {
            return (0.5 *($this->a * ($this->t * $this->t)) + ($this->Vi * $this->t) + $this->Xi). "m";

        }
}

$falling = new Gravity();
echo $falling->calcullate();

echo "\n";
