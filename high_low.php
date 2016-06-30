<?php

//random number generator
$num = (rand(1,100));



do {
	fwrite(STDOUT, 'Guess? ') . PHP_EOL;
	$guess = fgets(STDIN);

	if ($num == $guess){
		echo 'Good Guess!' . PHP_EOL;
	} elseif ($num > $guess) {
		echo 'Higher' . PHP_EOL;
	} else echo 'Lower' . PHP_EOL;
} while ($num != $guess);