<?php
/*Write a program to play a word-guessing game like Hangman.

It must randomly choose a word from a list of words. ✓
It must stop when all the letters are guessed. ✓
It must give them limited tries and stop after they run out.
It must display letters they have already guessed (either only the incorrect guesses or all guesses). ✓
-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	_ _ _ _ _ _ _ _ _

Misses:

Guess:	e

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	_ e _ _ _ _ _ _ _

Misses:

Guess:	i

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	_ e _ i _ _ _ _ _

Misses:

Guess:	a

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	_ e _ i a _ _ a _

Misses:

Guess:	r

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	_ e _ i a _ _ a _

Misses:	r

Guess:	s

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	_ e _ i a _ _ a _

Misses:	rs

Guess:	t

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	_ e _ i a t _ a _

Misses:	rs

Guess:	n

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	_ e _ i a t _ a n

Misses:	rs

Guess:	o

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	_ e _ i a t _ a n

Misses:	rso

Guess:	l

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	l e _ i a t _ a n

Misses:	rso

Guess:	v

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	l e v i a t _ a n

Misses:	rso

Guess:	h

-=-=-=-=-=-=-=-=-=-=-=-=-=-

Word:	l e v i a t h a n

Misses:	rso

YOU GOT IT!

Play "again" or "quit"? quit
*/

echo "Hello! Let's play a word guessing game! Like hangman! ". PHP_EOL;
echo "I will generate a random word! Try to guess it! ". PHP_EOL;
echo "You have 6 lives" . PHP_EOL;

$words = file("words.txt");
$word = rtrim(strtolower($words[array_rand($words)]));

$wordLength = strlen($word);

$correct = [];
$guesses = [];
$maxAttempts = 6;


for ($i = 0; $i < $wordLength; $i++) {
    echo '_ ';
    $correct[] = '_';
}
echo PHP_EOL;

while (true) {

    $user = readline("Enter a letter: ");

    if(strlen($user) != 1){
        echo PHP_EOL . "GUESS ON LETTER AT TIME!" . PHP_EOL;
        die;
    }

    $guesses[] = $user;
    $current[0] = $user;
    $lose = false;

    echo PHP_EOL;
    echo "Word: ";

    for ($i = 0; $i < $wordLength; $i++) {
        if (in_array($word[$i], $current, true)) {
            $correct[$i] = $word[$i];
            $lose = true;
        }
    }

    if(!$lose){
        $maxAttempts --;
    }
    if($maxAttempts == 0){
        echo $word . PHP_EOL;
        echo "You lose!" . PHP_EOL;
        exit;
    }

    echo implode($correct);
    echo PHP_EOL;

    if (implode($correct) == $word) {
        echo PHP_EOL . "You won!" . PHP_EOL;
        exit;
    }

    echo "Guess's: ";
    echo implode($guesses) . PHP_EOL;

    echo PHP_EOL;
}












