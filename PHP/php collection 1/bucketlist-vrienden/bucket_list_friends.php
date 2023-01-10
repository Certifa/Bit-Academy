<?php

$input = [];
$input = readline("Hoeveel vrienden zal ik vragen om hun droom? ");

if (!is_numeric($input)) {
    exit("'$input' is geen waardig getal");
}

$output = [];


for ($i = 0; $i < $input; $i++) { 
    $naam = readline("Wat is jouw naam? ");
    $dromen = readline("Wat is je droom? ");
    $output[$naam] = $dromen;
}



foreach ($output as $naam => $dromen) {
    echo " $naam jouw droom is: $dromen " . PHP_EOL;
}



?>
