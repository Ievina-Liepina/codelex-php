<?php

require_once "Player.php";
require_once "BlackPeter.php";
require_once "Deck.php";
require_once "Card.php";

$game = new BlackPeter();
$player = new Player();
$npc = new Player();

for($i = 0; $i < 25; $i++)
{
    $player->addCard($game->deal());
}

for($i = 0; $i < 24; $i++)
{
    $npc->addCard($game->deal());
}
echo PHP_EOL;

echo "Player: ";
foreach ($player->getCards() as $card)
{
    echo '|' . $card->getDisplayValue() . '|';
}
echo PHP_EOL;
echo "Player: ";
$player->disband();
foreach ($player->getCards() as $card)
{
    echo '|' . $card->getDisplayValue() . '|';
}
echo PHP_EOL;
echo "♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤";
echo PHP_EOL;

echo "Npc: ";
foreach ($npc->getCards() as $card)
{
    echo '|' . $card->getDisplayValue() . '|';
}
echo PHP_EOL;
echo "Npc: ";
$npc->disband();
foreach ($npc->getCards() as $card)
{
    echo '|' . $card->getDisplayValue() . '|';
}
echo PHP_EOL;

while(true)
{
    $player->playerHand($player, $npc);
    echo "♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤";
    echo PHP_EOL;

    echo "Player: ";
    foreach ($player->getCards() as $card) {
        echo '|' . $card->getDisplayValue() . '|';
    }
    echo PHP_EOL;

    echo "Npc: ";
    foreach ($npc->getCards() as $card) {
        echo '|' . $card->getDisplayValue() . '|';
    }
    echo PHP_EOL;

    if($game->winner($player)){
        echo "♡-♦=♤-♣=♡-♦=♤-♣=♡\n You won!" . PHP_EOL;
        exit;
    }
    if($game->winner($npc)){
        echo "♡-♦=♤-♣=♡-♦=♤-♣=♡\n Computer won!" . PHP_EOL;
        exit;
    }

    echo "♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤-♣=♡-♦=♤";
    echo PHP_EOL;

    $npc->npcHand($npc, $player);

    echo "Player: ";
    foreach ($player->getCards() as $card) {
        echo '|' . $card->getDisplayValue() . '|';
    }
    echo PHP_EOL;

    echo "Npc: ";
    foreach ($npc->getCards() as $card) {
        echo '|' . $card->getDisplayValue() . '|';
    }
    echo PHP_EOL;

    if($game->winner($player)){
        echo "♡-♦=♤-♣=♡-♦=♤-♣=♡\n You won!" . PHP_EOL;
        exit;
    }
    if($game->winner($npc)){
        echo "♡-♦=♤-♣=♡-♦=♤-♣=♡\n Computer won!" . PHP_EOL;
        exit;
    }

    sleep(1);
}

