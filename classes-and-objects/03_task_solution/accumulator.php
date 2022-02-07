<?php
class Accumulator
{
    private int $energy = 50;

    public function charge(int $percent): void
    {
        $this->energy += $percent;
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }
}