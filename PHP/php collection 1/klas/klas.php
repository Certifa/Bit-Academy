<?php

$klas = readline("Wie zit er in de klas? ");
$klas = explode(' ', $klas);

echo 'De studenten in de klas zijn: ' . PHP_EOL;

foreach ($klas as $naam) {
     echo $naam . PHP_EOL; 
}



?>
