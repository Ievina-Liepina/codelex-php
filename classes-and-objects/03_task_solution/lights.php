<?php
class Lights
{
    private string $beam;
    private int $beamCondition;


    public function __construct(string $beam, int $beam_condition = 100)
    {
        $this->beam = $beam;
        $this->beamCondition = $beam_condition;
    }

    public function beamCondition(int $percent): void
    {
        $this->beamCondition -= $percent;
    }

    public function getBeamCondition(): int
    {
        return $this->beamCondition;
    }

    public function getBeam(): string
    {
        return $this->beam;
    }
}