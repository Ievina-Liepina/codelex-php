<?php

class BlackPeter
{
    private Deck $deck;

    public function __construct()
    {
        $this->deck = new Deck();
    }
//deals cards
    public function deal(): Card
    {
        return $this->deck->draw();
    }
//checks winner
    public function winner(Player $player): bool
    {
       if(count($player->getCards()) == 0) return true;
       return false;
    }
}