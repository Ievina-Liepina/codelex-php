<?php
$symbols = ['A', 'B', 'D', 'C', '7', '9'];
$payouts = [
    'B | B | B' => '10',
    'D | D | D' => '20',
    'A | A | A' => '30',
    'C | C | C' => '50',
    '8 | 8 | 8' => '70',
    '9 | 9 | 9' => '100'
];

while(true) {
    $wheel1 = [];

    foreach ($symbols as $element) {
        $wheel1[] = $element;
    }

    $wheel2 = array_reverse($wheel1);
    $wheel3 = $wheel1;
    $wheel4 = array_reverse($wheel1);


    $user = intval(readline('Enter your cash amount: ')) . PHP_EOL;

    while ($user > 0) {
        $bet = intval(readline("Bet amount: "));
        echo PHP_EOL;

        if ($bet > $user) {
            echo "NOT ENOUGH MONEY." . PHP_EOL;
            break;
        } else {
            $user -= $bet;
        }

        if ($bet > $user) {
            if (!empty($stop1)) {
                $start1 = $stop1;
            }
            if (!empty($stop2)) {
                $start2 = $stop2;
            }
            if (!empty($stop3)) {
                $start3 = $stop3;
            }
            $total = $user;
            $bust = $user;
        } else {
            $start1 = 0;
            $start2 = 0;
            $start3 = 0;
            $user;
            $bust = false;
        }

        if ($user) {
            $start1 = 0;
            $start2 = 0;
            $start3 = 0;
            $user;
            $bust = false;
        }

        $stop1 = rand(count($wheel1) + $start1, $bet * count($wheel1)) % count($wheel1);
        $stop2 = rand(count($wheel1) + $start2, $bet * count($wheel1)) % count($wheel1);
        $stop3 = rand(count($wheel1) + $start3, $bet * count($wheel1)) % count($wheel1);

        $result1 = $wheel1[$stop1];
        $result2 = $wheel2[$stop2];
        $result3 = $wheel3[$stop3];

        $slot_result = $result1 . ' | ' . $result2 . ' | ' . $result3;
        $slot_result1 = $result3 . ' | ' . $result1 . ' | ' . $result2;
        $slot_result2 = $result2 . ' | ' . $result3 . ' | ' . $result1;

        if ($user == 0) {
            $bust = true;
        } else {
            $bust = false;
        }

        if ($bust == true) {
            echo "You don't have any money!" . PHP_EOL;
        } else {
            echo $slot_result . PHP_EOL;
            echo $slot_result1 . PHP_EOL;
            echo $slot_result2 . PHP_EOL;
            if (isset($payouts[$slot_result])) {
                $total = $user + $payouts[$slot_result];
                echo PHP_EOL . "You won: $" . $payouts[$slot_result];
            } elseif (isset($payouts[$slot_result1])) {
                $total = $user + $payouts[$slot_result1];
                echo PHP_EOL . "You won: $" . $payouts[$slot_result1];
            } elseif (isset($payouts[$slot_result2])) {
                $total = $user + $payouts[$slot_result2];
                echo PHP_EOL . "You won: $" . $payouts[$slot_result2];
            } else {
                $total = $user - $bet;
                echo PHP_EOL. "You lost: $bet";
            }
        }
        echo PHP_EOL . "Total cash: $" . $total . PHP_EOL;
    }
}

