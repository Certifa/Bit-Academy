<?php

if (count($argv) < 2) {
    echo "Geen tijd meegegeven" . PHP_EOL;
    exit;
}

$total_time = 0;

for ($i = 1; $i < count($argv); $i++) {
    $time = $argv[$i];

    // Splits het command-line argument op in de hoeveelheid tijd en de tijdseenheid.
    $amount = (int) substr($time, 0, -1);
    $type = substr($time, -1);

    // Bereken het aantal seconden op basis van de tijdseenheid en tel dat op bij het totaal.
    switch ($type) {
        case 'd':
            $total_time += 60 * 60 * 24 * $amount;
            break;
        case 'u':
            $total_time += 60 * 60 * $amount;
            break;
        case 'm':
            $total_time += 60 * $amount;
            break;
        case 's':
            $total_time += $amount;
            break;
    }
}

echo "De totale tijd is " . $total_time . " seconden" . PHP_EOL;
