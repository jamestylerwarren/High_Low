<?php

$min = 1;
$max = 100;

if ($argc >= 3) {
	if (is_numeric($argv[1]) && is_numeric($argv[2]) && $argv[1] < $argv[2]) {
		$min = $argv[1];
		$max = $argv[2];
	} else {
		echo "Please pass two numberic values, the first being the minimum value, the second being the maximum value" . PHP_EOL;
		exit(1);
	}
}

$num = mt_rand($min,$max);
$guesses = 0;

do {
	fwrite(STDOUT, 'Guess? ') . PHP_EOL;
	$guess = trim(fgets(STDIN));
	$guesses++;
	if ($num == $guess){
		echo "Good Guess! You guessed $guesses times." . PHP_EOL;
	} elseif ($num > $guess) {
		echo "Higher" . PHP_EOL;
	} else echo "Lower" . PHP_EOL;
} while ($num != $guess);
