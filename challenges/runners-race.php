<?php

    function createLane($playerPosition, $playerName, $totalLength): string
    {
        $output = '';
        if ($playerPosition >= $totalLength){
            $playerPosition = $totalLength - 1;
        }
        for ($i = 0; $i < $totalLength; $i++){
            if($i == $playerPosition){
                $output .= "$playerName ";
            }else{
                $output .= "- ";
            }
        }
        return $output . "\n";
    }

    $players = [
        // 'playerName' => initial starting position
        'A' => 0,
        'B' => 0,
        'C' => 0,
        'D' => 0,
    ];

    // define total length for the race
    $totalLength = 20;

    echo "Which player you chose to bet on?\n";
    echo "A, B, C or D\n";

    $betPlayer = readline(">> ");
    echo PHP_EOL;

    $winner = FALSE;
    while ($winner == FALSE){
        foreach($players as $key => $value){
            $steps = rand(1, 3);
            $players[$key] += $steps;

            if ($players[$key] >= $totalLength - 1){
                print_r(createLane($players[$key], $key, $totalLength));
                $winner = TRUE;
            }else{
                echo createLane($players[$key], $key, $totalLength);
            }
    
        }
        sleep(1);
        echo PHP_EOL;
    }

    echo "The winners of the match are:\n";

    // sort the array
    asort($players, SORT_NUMERIC);
    $players = array_reverse($players);

    $prev = 0;
    $places = array('First', 'Second', 'Third');
    $placeCounter = 0;
    foreach($players as $key=>$current){
        if($placeCounter > 2){
            break;
        }
        if($prev == $current){
            $placeCounter--;
            if($placeCounter > 2){
                break;
            }

            // check if bet is won or not
        }
        if ($betPlayer == $key && $placeCounter == 0){
            $betWon = TRUE;
        }
        echo "Player $key: {$places[$placeCounter]} \n";
        $placeCounter++;
        $prev = $current;
    }

    if (@$betWon){
        echo "You've won the bet!\n";
    }else{
        echo "You've lost the bet!\n";
    }


