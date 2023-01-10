<?php

$klas = ["Sjonnie de Wiel", "Herman Kaal", "Henk de Steen", "Inge Kerkhoven", "Gert Kruiswijk"];

// De count() functie geeft een getal als resultaat
// De for loop zal dus gebaseerd zijn op het aantal elementen dat in de array zit
// ($i < count($klas)) zal PHP dus lezen als ($i < 6) omdat er 6 elementen in de array zitten.
for ($i = 0; $i < count($klas); $i++) {
    // Vervolgens kunnen we met $i elke iteratie een waarde uit de array halen om te laten zien
    echo $klas[$i] . PHP_EOL;
}