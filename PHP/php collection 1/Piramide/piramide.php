<?php

$i = readline("Hoeveel stapels wil je hebben?: ");

echo $i . PHP_EOL;

for ($x = 0; $x < $i; $x++) {
    for ($y = 0; $y <= $x; $y++) {
        echo "*";
    }
    echo PHP_EOL;
}

?>
