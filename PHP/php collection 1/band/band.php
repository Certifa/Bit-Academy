<?php

echo "Het albumoverzicht: " . PHP_EOL; 

$muziek = array("Citizen of Glass" => "4.5", 
    "Night" => "9",  
    "New Eyes" => "5", 
    "Strange Trails" => "10");

foreach ($muziek as $album => $prijs) {
    echo $album . " kost €" . $prijs . PHP_EOL; 
}
echo "Het totaalbedrag van alle albums is: €" . (array_sum($muziek)) . PHP_EOL; 

echo "De gemiddelde prijs van alle albums is: €" . (array_sum($muziek)) / count($muziek) . PHP_EOL;

?>
