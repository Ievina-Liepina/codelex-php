<?php
/*Spēlētāju skaits: 1
Spēle notiek pret datoru
Spēles notikumu "logs", kurā tiek saglabāts spēlētāja izvēle + pret ko cīnījās un kāds bija rezultāts.
*/

echo "Let's play Rock-Paper-Scissors-Lizard-Spock!" . PHP_EOL;
echo "You will play against computer!" . PHP_EOL;
echo "Choose what you wish to play:" . PHP_EOL;
echo PHP_EOL;

$matches = [
    "rock" => ["scissors", "lizard"],
    "paper" => ["rock", "spock"],
    "scissors" => ["paper", "lizard"],
    "lizard" => ["spock", "paper"],
    "spock" => ["scissors", "rock"]
];

while(true) {
    $computer = file("rock.txt");
    $player1 = rtrim($computer[array_rand($computer)]);

    echo PHP_EOL;
    echo '[1] Paper' . PHP_EOL;
    echo '[2] Rock' . PHP_EOL;
    echo '[3] Scissors' . PHP_EOL;
    echo '[4] Lizard' . PHP_EOL;
    echo '[5] Spock' . PHP_EOL;
    echo '[6] Quit' . PHP_EOL;

    $player2 = readline(">> ");
    echo PHP_EOL;

    switch ($player2) {
        case 1:
            $player2 = 'paper';
            echo "$player2 VS $player1" . PHP_EOL;
            break;
        case 2:
            $player2 = 'rock';
            echo "$player2 VS $player1" . PHP_EOL;
            break;
        case 3:
            $player2 = 'scissors';
            echo "$player2 VS $player1" . PHP_EOL;
            break;
        case 4:
            $player2 = 'lizard';
            echo "$player2 VS $player1" . PHP_EOL;
            break;
        case 5:
            $player2 = 'spock';
            echo "$player2 VS $player1" . PHP_EOL;
            break;
        default:
            exit;
    }

    if ($player2 === $player1) {
        echo "Draw!" . PHP_EOL;
    }

    if (in_array($player1, $matches[$player2])) {
        echo "You won!" . PHP_EOL;
    } else {
        echo "You loose!" . PHP_EOL;
    }
}
