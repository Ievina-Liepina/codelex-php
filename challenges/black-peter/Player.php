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
//Player picks random card from other player and that card is then deleted from the other player
    public function pickOneCard(Player $player, Player $playerTwo): void
    {
        $cardIndex = array_rand($playerTwo->getCards());
        $player->cards[] = $playerTwo->cards[$cardIndex];
        unset($playerTwo->cards[$cardIndex]);
        $player->disband();
    }
//put away cards with similar symbol and color
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