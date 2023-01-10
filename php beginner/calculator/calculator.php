<?php

$getchoice = readline('Welke operatie wil je uitvoeren? (+, -) '); 

$get1 = readline('Wat is je eerste getal? ');

$get2 = readline('Wat is je tweede getal? ');


if ($getchoice == "+") {
    echo 'Uw resultaat is: ' . $get1 + $get2 ;
} elseif ($getchoice == "-") {
    echo 'Uw resultaat is: ' . $get1 - $get2 ;
}

?>