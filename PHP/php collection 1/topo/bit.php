<?php

$steden = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico-Stad",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentinië" => "Buenos Aires",
    "Egypte" => "Cairo",
    "Engeland" => "Londen"
];

$score = 0;

foreach ($steden as $land => $stad) {
    $antwoord = readline("Welke hoofdstad heeft $land?" . PHP_EOL);

    if ($antwoord == $stad) {
        echo "Correct!" . PHP_EOL;
        $score++;
    } else {
        echo "Helaas, $antwoord is niet de hoofdstad van $land." . PHP_EOL;
        echo "Het correcte antwoord is: $stad" . PHP_EOL;
    }
}

echo "Je hebt $score van de " . count($steden) . " goed geraden!" . PHP_EOL;
