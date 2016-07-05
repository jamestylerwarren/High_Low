<?php

// var_dump($argc);
// var_dump($argv);


if ($argc === 3 && is_numeric($argv[1]) && is_numeric($argv[2])) {

	$num = mt_rand($argv[1],$argv[2]);
	$guesses = 0;

	do {
		fwrite(STDOUT, 'Guess? ') . PHP_EOL;
		$guess = trim(fgets(STDIN));
		$guesses += 1;
		if ($num == $guess){
			echo "Good Guess! You guessed $guesses times." . PHP_EOL;
		} elseif ($num > $guess) {
			echo "Higher" . PHP_EOL;
		} else echo "Lower" . PHP_EOL;
	} while ($num != $guess);

} else echo "Please pass two numbers" . PHP_EOL;