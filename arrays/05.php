<?php
/*Code an interactive, two-player game of Tic-Tac-Toe. You'll use a two-dimensional array of chars.

(...a game already in progress)

	X   O
	O X X
	  X O

'O', choose your location (row, column): 0 1

	X O O
	O X X
	  X O

'X', choose your location (row, column): 2 0

	X O O
	O X X
	X X O

The game is a tie.
*/

echo "Let's play Tic Tac Toe together! :)". PHP_EOL;
//Izveido laukumu
/*
$board = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-'],
];
*/

$board = [];
$combinations = [];

[$boardBase, $combinationsBase] = explode('#', file_get_contents('game.txt'));

$boardRows = explode(';', $boardBase);

foreach ($boardRows as $rowInt => $boardRow)
{
    foreach (explode(',', $boardRow) as $row)
    {
        $board[$rowInt][] = $row;
    }
}

foreach(explode('|', $combinationsBase) as $combinationNumber => $combination)
{
    foreach (explode(';', $combination) as $coordinates => $coordinate)
    {
        [$x, $y] = explode(',', $coordinate);
        $combinations[$combinationNumber][$coordinates] = [(int) $x, (int) $y];
    }
}

//Izveido spēlētājus
$player1 = readline('Player one, please enter your desired symbol: ');
$player2 = readline('Player two, please enter your desired symbol: ');

$activePlayer = $player1;

//Uzvaru kombinācijas
/*
$combinations = [
    [
        [0, 0], [0, 1], [0, 2],
    ],
    [
        [1, 0], [1, 1], [1, 2]
    ],
    [
        [2, 0], [2, 1], [2, 2]
    ],
    [
        [0, 0], [1, 0], [2, 0],
    ],
    [
        [0, 1], [1, 1], [2, 1]
    ],
    [
        [0, 2], [1, 2], [2, 2]
    ],
    [
        [0, 0], [1, 1], [2, 2]
    ],
    [
        [2, 0], [1, 1], [0, 2]
    ]
];
*/

//Noskaidro uzvarētājus
function winnerWinnerChickenDinner(array $combinations, array $board, string $activePlayer): bool
{
    foreach ($combinations as $combination) {
        foreach ($combination as $item)
        {
            [$row, $column] = $item;
            if ($board[$row][$column] !== $activePlayer) {
                break;
            }

            if (end($combination) === $item) {
                return true;
            }
        }
    }

    return false;
}
//Pārbaudīt vai laukums ir pilns
function isBoardFull(array $board): bool
{
    foreach ($board as $row) {
        if (in_array('-', $row)) return false;
    }
    return true;
}
//X
// $board[0][0] = X

//Uzzīmē laukumu
function drawBoard(array $board): void{
    foreach ($board as $item){
        foreach ($item as $value){
            echo " $value ";
        }
        echo PHP_EOL;
    }
}

//Jāizveido cikls, lai spēle ietu tik ilgi, līdz ir uzvarētājs, vai tie
while (!isBoardFull($board) && !winnerWinnerChickenDinner($combinations, $board, $activePlayer)) {
    drawBoard($board);

    //Ievadīt combināciju pozīcīju
    $position = readline("Enter position ({$activePlayer}): ");
    [$row, $column] = explode(',', $position);

 //check if there is $row and $column variables
 //check the scope if $row and $column keys exist in $board

    if (!isset($board[$row][$column]) || $board[$row][$column] !== '-') {
        echo 'Invalid position. its taken!' . PHP_EOL;
        continue;
    }

    $board[$row][$column] = $activePlayer;

    //Terminālī pārbauda kurš uzvarēja
    if (winnerWinnerChickenDinner($combinations, $board, $activePlayer))
    {
        echo 'Winner is ' . $activePlayer;
        echo PHP_EOL;
        exit;
    }

    //Maina spēlētājus ik pēc katra gājiena
    $activePlayer = $player1 === $activePlayer ? $player2 : $player1;
}

//Ja laukums ir pilns, bez uzvarētāja, spēle ir neizšķirta
echo 'The game was tied.';
echo PHP_EOL;