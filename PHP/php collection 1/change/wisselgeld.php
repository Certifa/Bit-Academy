<?php

define("MONEY_UNITS", [50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05]);
define("CENTS_IN_EURO", 100);


if (count($argv) != 2) {
    exitchange_a();
} else {
    $remainingAmount = convertToCents(floatval($argv[1]));
}

try {
    if ($remainingAmount < 0) {
        throw new Exception("Input moet een positief getal zijn");
    }
} catch (Exception $ex) {
    echo "Error opgevangen: " . $ex->getMessage() . PHP_EOL;
}


try {
    if (!is_numeric($argv[1])) {
        throw new Exception("Input moet een getal zijn");
    }
} catch (Exception $th) {
    echo "Error opgevangen: " . $th->getMessage() . PHP_EOL;
}

if ($remainingAmount == 0) {
    exitchange();
}

foreach (MONEY_UNITS as $unit) {
    $unit *= CENTS_IN_EURO;
    
    if ($remainingAmount >= $unit) {
        $amountOfUnitInRemainingAmount = floor($remainingAmount / $unit);
        $remainingAmount = $remainingAmount % $unit;
        
        if ($unit >= CENTS_IN_EURO) {
            echo $amountOfUnitInRemainingAmount . " x " . $unit / CENTS_IN_EURO . " euro" . PHP_EOL;
        } else {
            echo $amountOfUnitInRemainingAmount . " x " . $unit . " cent" . PHP_EOL;
        }
    }
}



function convertToCents($amount)
{
    $result = round($amount / 0.05) * 0.05;
    return $result * CENTS_IN_EURO;
}

function exitchange()
{
    exit("Geen wisselgeld" . PHP_EOL);
}

function exitchange_a()
{
     exit("Error opgevangen: Verkeerd aanatal argumenten. Roep de applicatie aan op de volgende manier: 'wisselgeld.php <bedrag>'" . PHP_EOL);
}
 
?>
