<?php

$amount = readline("Hoeveel activiteiten wil je toevoegen?" . PHP_EOL);

if (!is_numeric($amount)) {
    exit("'$amount' is geen getal, probeer het opnieuw" . PHP_EOL);
}

$list = [];

for ($i = 0; $i < $amount; $i++) {
    $list[] = readline("Wat wil je toevoegen aan jouw bucket list?" . PHP_EOL);
}

echo "Op jouw bucket list staat: " . PHP_EOL;

for ($i = 0; $i < $amount; $i++) {
    echo $list[$i] . PHP_EOL;
}
