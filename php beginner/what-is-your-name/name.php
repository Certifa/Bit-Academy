<?php

echo 'Wat is jou voornaam?' . PHP_EOL;

$voornaam = readline();

echo 'Wat is jou achternaam?' . PHP_EOL;

$achternaam  = readline();

echo ' Jouw naam is: ' . /* combining 2 strings together met Concatenation  */   $result = $voornaam . ' ' . $achternaam;

?>