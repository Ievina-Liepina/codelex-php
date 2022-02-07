<?php

require_once "Player.php";
require_once "BlackPeter.php";
require_once "Deck.php";
require_once "Card.php";

$game = new BlackPeter();
$player = new Player();
$npc = new Player();
//var_dump(count($game->getDeck()->getCards()));

//deal
for($i = 0; $i < 25; $i++)
{
    $player->addCard($game->deal());
}

for($i = 0; $i < 24; $i++)
{
    $npc->addCard($game->deal());
}
echo PHP_EOL;
//Player
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
echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";
echo PHP_EOL;
//Npc
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
echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";
echo PHP_EOL;
/*
while(true)
{

}
*/
