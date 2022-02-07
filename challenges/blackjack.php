<?php

class Deck
{
    public array $cards = ["A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K"];
    public int $playerSum = 0;
    public int $computerSum = 0;

    public function randomCard()
    {
        $this->deck = $this -> cards;
        shuffle($this->deck);
        return array_shift($this->deck);
    }
    function getRandomCard(): int
    {
        $card = $this -> randomCard();
        if($card == "A"){
            return 11;
        }elseif($card == "J" || $card == "Q" || $card == "K"){
            return 10;
        }else{
            return (int) $card;
        }
    }

    function pickCard($type)
    {
        if($type == 'User'){
            $choice = readline("Pick card (p) or Hold (h): ");
            while($choice == 'p'){
                $this -> playerSum += $this -> getRandomCard();
                echo 'Player Sum: ' . $this -> playerSum . "\n";

                if($this -> playerSum > 21){
                    echo "Computer Wins!\n";
                    return TRUE;
                }

                $choice = readline("Pick card (p) or Hold (h): ");
            }

            // check if player holds and computer has more than 0 points
            if($choice == 'h' && ($this -> computerSum) > 0 && ($this -> playerSum) > 17){
                if($this -> playerSum > $this -> computerSum){
                    echo "Player Wins!\n";
                }else{
                    echo "Computer Wins!\n";
                }
                return TRUE;
            }
        }elseif($type == 'Computer'){
            if($this -> computerSum > 17){
                echo "Computer doesn't pick (happy with its score)\n";
            }
            while($this -> computerSum < 17){
                $this -> computerSum += $this -> getRandomCard();
                echo 'Computer Sum: ' . $this -> computerSum . "\n";

                if($this -> computerSum > 21){
                    echo "Player Wins!\n";
                    return TRUE;
                }
            }
        }
    }

    function winner(){
        $user = 'User';
        $win = FALSE;
        
        while ($win !== TRUE){
            $win = $this -> pickCard($user);
            $user = ($user == 'User')? 'Computer': 'User';
        }
    }
}


$game = new Deck();
echo $game->winner();

