<?php

$names = readline("Wie zit er in de klas?" . PHP_EOL);

$names = explode(" ", $names);

echo "De studenten in de klas zijn:" . PHP_EOL;

foreach ($names as $name) {
    echo $name . PHP_EOL;
}
