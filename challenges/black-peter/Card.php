<?php

class Card
{
    private string $suit;
    private string $symbol;
    private string $color;

    public function __construct(string $suit, string $symbol, string $color = '')
    {
        $this->suit = $suit;
        $this->symbol = $symbol;
        $this->color = $this->setColor();
    }

    public function getSuit(): string
    {
        return $this->suit;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }
//sets color to clubs and spades symbol
    public function setColor(): string
    {
        if($this->getSuit() === '♠' || $this->getSuit() === '♣')
        {
            $this->color = 'black';
        }

        if($this->getSuit() === '♥' || $this->getSuit() === '♦') {
            $this->color = 'red';
        }

        return $this->color;
    }
//displays how card will look
    public function getDisplayValue(): string
    {
        return "{$this->symbol}{$this->suit}";
    }
}
