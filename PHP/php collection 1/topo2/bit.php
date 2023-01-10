<?php

$amount = readline("Hoeveel landen ga je toevoegen?" . PHP_EOL);

$countries = [];

for ($i = 0; $i < $amount; $i++) {
    $country = readline("Welk land wil je toevoegen?" . PHP_EOL);
    $capital = readline("Wat is de hoofdstad van $land?" . PHP_EOL);

    $countries[$country] = $capital;
}

echo "De volgende landen en steden zitten in de database:" . PHP_EOL;
foreach ($countries as $country => $capital) {
    echo "$country, $capital" . PHP_EOL;
}
