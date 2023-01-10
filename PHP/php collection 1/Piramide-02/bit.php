<?php

echo 'Hoeveel blokken zijn er beschikbaar voor de piramide?' . PHP_EOL;
$blokken = readline('> ');

$hoogte = 0;

// zolang het aantal blokken groter is dan de hoogte
while ($blokken > $hoogte) {
    // kun je een rij bouwen: hoog de hoogte op met 1
    $hoogte++;
    // verlaag vervolgens het aantal blokken met het aantal blokken wat nodig was voor het bouwen van de laag (gelijk aan de hoogte)
    $blokken -= $hoogte;
}

echo $hoogte;
