<?php

$operator = readline("Welke operatie wil je uitvoeren? (+, -)" . PHP_EOL);
$number1 = readline("Eerste getal?" . PHP_EOL);
$number2 = readline("Tweede getal?" . PHP_EOL);

if ($operator == "+") {
    echo $number1 + $number2;
} elseif ($operator == "-") {
    echo $number1 - $number2;
}