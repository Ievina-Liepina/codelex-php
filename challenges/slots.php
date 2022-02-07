<?php
$symbols = ['A', 'C', 'B', 'D', '7', '9'];

while(true) {
    echo "Welcome to slots game." . PHP_EOL;
    echo PHP_EOL;

    echo "Choose your slot machine!" . PHP_EOL;
    echo '[1] three by three' . PHP_EOL;
    echo '[2] three by four' . PHP_EOL;
    echo 'Exit' . PHP_EOL;


    $options = readline('>> ');

    switch ($options) {
        case 1:

            $tokens = intval(readline("Enter your cash amount: "));

            while ($tokens > 0) {
                echo "You have $tokens$" . PHP_EOL;

                $bet = intval(readline("Bet amount: "));
                echo PHP_EOL;

                if ($bet > $tokens) {
                    echo "NOT ENOUGH MONEY." . PHP_EOL;
                    break;
                } else {
                    $tokens -= $bet;
                }

                $x = $symbols[array_rand($symbols)];
                $x2 = $symbols[array_rand($symbols)];
                $x3 = $symbols[array_rand($symbols)];
                $x4 = $symbols[array_rand($symbols)];
                $x5 = $symbols[array_rand($symbols)];
                $x6 = $symbols[array_rand($symbols)];
                $x7 = $symbols[array_rand($symbols)];
                $x8 = $symbols[array_rand($symbols)];
                $x9 = $symbols[array_rand($symbols)];

                echo PHP_EOL;
                echo "| " . $x . " | " . $x2 . " | " . $x3 . " |" . PHP_EOL;
                echo "-------------" . PHP_EOL;
                echo "| " . $x4 . " | " . $x5 . " | " . $x6 . " |" . PHP_EOL;
                echo "-------------" . PHP_EOL;
                echo "| " . $x7 . " | " . $x8 . " | " . $x9 . " |" . PHP_EOL;
                echo PHP_EOL;


                if ($x == $x2 && $x2 == $x3) {
                    $payout = $bet * 2;
                    echo "You won $payout$!" . PHP_EOL;
                    $tokens += $payout;
                } elseif ($x4 == $x5 && $x5 == $x6) {
                    $payout2 = $bet * 2;
                    echo "You won $payout2$!" . PHP_EOL;
                    $tokens += $payout2;
                } elseif ($x7 == $x8 && $x8 == $x9) {
                    $payout3 = $bet * 2;
                    echo "You won $payout3$!" . PHP_EOL;
                    $tokens += $payout3;
                } elseif ($x2 == $x4 && $x4 == $x6) {
                    $payout4 = $bet * 2;
                    echo "You won $payout4$!" . PHP_EOL;
                    $tokens += $payout4;
                } elseif ($x == $x4 && $x4 == $x8) {
                    $payout5 = $bet * 2;
                    echo "You won $payout5$!" . PHP_EOL;
                    $tokens += $payout5;
                } else {
                    echo "Spin again!" . PHP_EOL;
                }

            }
            echo "You are out of money!" . PHP_EOL;
            echo "Thank you for playing!" . PHP_EOL;
            echo PHP_EOL;

            break;
        case 2:

            $sum = intval(readline("Enter your cash amount: "));

            while ($sum > 0) {
                echo "You have $sum$" . PHP_EOL;

                $bet2 = intval(readline("Bet amount: "));

                if ($bet2 > $sum) {
                    echo "NOT ENOUGH MONEY." . PHP_EOL;
                    break;
                } else {
                    $sum -= $bet2;
                }

                $y = $symbols[array_rand($symbols)];
                $y2 = $symbols[array_rand($symbols)];
                $y3 = $symbols[array_rand($symbols)];
                $y4 = $symbols[array_rand($symbols)];
                $y5 = $symbols[array_rand($symbols)];
                $y6 = $symbols[array_rand($symbols)];
                $y7 = $symbols[array_rand($symbols)];
                $y8 = $symbols[array_rand($symbols)];
                $y9 = $symbols[array_rand($symbols)];
                $y10 = $symbols[array_rand($symbols)];
                $y11 = $symbols[array_rand($symbols)];
                $y12 = $symbols[array_rand($symbols)];

                echo PHP_EOL;
                echo "| " . $y . " | " . $y2 . " | " . $y3 . " | " . $y4 . " |" . PHP_EOL;
                echo "-----------------" . PHP_EOL;
                echo "| " . $y5 . " | " . $y6 . " | " . $y7 . " | " . $y8 . " |" . PHP_EOL;
                echo "-----------------" . PHP_EOL;
                echo "| " . $y9 . " | " . $y10 . " | " . $y11 . " | " . $y12 . " |" . PHP_EOL;
                echo PHP_EOL;

                if ($y == $y2 && $y2 == $y3 & $y3 == $y8) {
                    $win = $bet2 * 2;
                    echo "You won $win&!" . PHP_EOL;
                    $sum += $win;
                } elseif ($y5 == $y6 && $y6 == $y11 && $y11 == $y8) {
                    $win2 = $bet2 * 2;
                    echo "You won $win2$!" . PHP_EOL;
                    $sum += $win2;
                } elseif ($y9 == $y10 && $y10 == $y7 && $y7 == $y12) {
                    $win3 = $bet2 * 2;
                    echo "You won $win3$!" . PHP_EOL;
                    $sum += $win3;
                } elseif ($y4 == $y7 && $y7 == $y10 && $y10 == $y9) {
                    $win4 = $bet2 * 2;
                    echo "You won $win4$!" . PHP_EOL;
                    $sum += $win4;
                } elseif ($y == $y6 && $y6 == $y11 && $y11 == $y12) {
                    $win5 = $bet2 * 2;
                    echo "You won $win5$!" . PHP_EOL;
                    $sum += $win5;
                } else {
                    echo "Spin again!" . PHP_EOL;
                }

            }
            echo "You are out of money!" . PHP_EOL;
            echo "Thank you for playing!" . PHP_EOL;
            echo PHP_EOL;

            break;
        default:
            exit;
    }
}