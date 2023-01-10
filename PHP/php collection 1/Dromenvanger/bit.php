<?php

$amount = intval(readline("Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL));
if (!$amount) {
    exit("Geen geldig aantal vrienden");
}

$bucketlist = [];

for ($i = 0; $i < $amount; $i++) { 
    $name = readline("Wat is je naam?" . PHP_EOL);
    
    $dreamAmount = intval(readline("Hoeveel dromen ga je opgeven?" . PHP_EOL));

    for ($x = 0; $x < $dreamAmount; $x++) { 
        $bucketlist[$name][] = readline("Wat is jouw droom?" . PHP_EOL);
    }
}

foreach ($bucketlist as $name => $dreams) {
    foreach ($dreams as $dream) {
        echo "$name heeft dit als droom: $dream" . PHP_EOL;
    }
}
