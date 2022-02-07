<?php

class BlackPeter
{
    private Deck $deck;

    public function __construct()
    {
        $this->deck = new Deck();
    }

    public function deal(): Card
    {
        return $this->deck->draw();
    }

    public function winner(Player $player): bool
    {
       if(count($player->getCards()) == 0) return true;
       return false;
    }
}