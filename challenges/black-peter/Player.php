<?php

class Player
{
    private array $cards = [];

    /**
     * @return Card[]
     */

    public function getCards(): array
    {
        return $this->cards;
    }

    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    public function playerHand(Player $player, Player $npc): void
    {
        $cardIndex = array_rand($npc->getCards());
        $player->cards[] = $npc->cards[$cardIndex];
        unset($npc->cards[$cardIndex]);
        $player->disband();
    }

    public function npcHand(Player $npc, Player $player): void
    {
        $cardIndex = array_rand($player->getCards());
        $npc->cards[] = $player->cards[$cardIndex];
        unset($player->cards[$cardIndex]);
        $npc->disband();
    }

    public function disband()
    {
        $symbols = [];
        foreach ($this->cards as $card)
        {
            $symbols[] = $card->getSymbol() . $card->setColor();
        }

        $uniqueCardsCount = array_count_values($symbols);

        foreach ($uniqueCardsCount as $symbol => $count)
        {
            if($count === 1) continue;
            if($count === 2 || $count === 4){
                foreach ($this->cards as $index => $card)
                {
                    if($card->getSymbol() . $card->setColor() === (string) $symbol){
                        unset($this->cards[$index]);
                    }
                }
            }
            if($count === 3){
                for($i = 0; $i < 2; $i++){
                    foreach ($this->cards as $index => $card)
                    {
                        if($card->getSymbol() . $card->setColor() === (string) $symbol){
                            unset($this->cards[$index]);
                            break;
                        }
                    }
                }
            }
        }
    }
}