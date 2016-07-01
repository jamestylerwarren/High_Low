<?php

//random number generator
$num = (mt_rand(1,100));
$guesses = 0;


do {
	fwrite(STDOUT, 'Guess? ') . PHP_EOL;
	$guess = fgets(STDIN);
	$guesses += 1;
	if ($num == $guess){
		echo "Good Guess! You guessed $guesses times." . PHP_EOL;
	} elseif ($num > $guess) {
		echo 'Higher' . PHP_EOL;
	} else echo 'Lower' . PHP_EOL;
} while ($num != $guess);