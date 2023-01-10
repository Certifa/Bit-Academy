<?php

$input = readline("Hoeveel landen wil jij toevoegen? ");

for ($i = 0; $i < $input; $i++) { 
    $land = readline("Welk land wil jij toevoegen? ");
    $stad = readline("Wat is de hoofdstad van $land? ");
    $output[$land] = $stad;
}

echo "de volgende landen zitten in de database: " . PHP_EOL;

foreach ($output as $land => $stad) { 
    echo "$land, $stad"  . PHP_EOL;
}











?>
