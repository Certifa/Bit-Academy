<?php

//Hoeveel Blokken wil je?
$numberOfBlocks = readline("Hoeveel blokken zijn er beschikbaar voor de piramide? ") . PHP_EOL;

$numberOfLayers = 0;
do {
    $numberOfBlocks -= ($numberOfLayers + 1);
    if ($numberOfBlocks < 0) { 
        break;
    }
    $numberOfLayers++;
} while (true);

echo "Aantal lagen : $numberOfLayers" . PHP_EOL;

?>