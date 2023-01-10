<?php

$positieveWoorden = convertFileToArray("positive-words.txt");
$neutraleWoorden = convertFileToArray("neutral-words.txt");
$negatieveWoorden = convertFileToArray("negative-words.txt");
$lyrics = file_get_contents("lyrics.txt");
$lyrics = str_replace("\n", " ", $lyrics);
$lyrics = explode(" ", $lyrics);

function convertFileToArray($file)
{
    $array = file_get_contents($file);
    $array = explode("\n", $array);
    return $array;
}

$positieveWoorden;
$neutraleWoorden;
$negatieveWoorden;
$lyrics;

$positieveWoordenInTekst = 0;
foreach ($lyrics as $woord) {
    if (in_array($woord, $positieveWoorden)) {
        $positieveWoordenInTekst++;
    }
}


$neutraleWoordenInTekst = 0;
foreach ($lyrics as $woord) {
    if (in_array($woord, $neutraleWoorden)) {
        $neutraleWoordenInTekst++;
    }
}

$negatieveWoordenInTekst = 0;
foreach ($lyrics as $woord) {
    if (in_array($woord, $negatieveWoorden)) {
        $negatieveWoordenInTekst++;
    }
}

$sentiment = ($neutraleWoordenInTekst + $positieveWoordenInTekst - $negatieveWoordenInTekst) / $neutraleWoordenInTekst;

$sentiment = round($sentiment, 2);

echo " Positieve woorden: $positieveWoordenInTekst" . PHP_EOL;
echo " Neutrale woorden: $neutraleWoordenInTekst" . PHP_EOL;
echo " Negatieve woorden: $negatieveWoordenInTekst" . PHP_EOL;
echo " Het sentiment van de tekst krijgt een score van: $sentiment" . PHP_EOL;


