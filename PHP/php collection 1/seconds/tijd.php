<?php

$tijd = implode(" ", $argv);
$tijd_array = (explode(" ", $tijd));
$tijd_totaal = 0 ;
$tijd_sec = 0 ;
$tijd_min = 0 ;
$tijd_uur = 0 ;
$tijd_dag = 0 ;

if (empty($argv[1])) {   
    echo "Geen gegevens gevonden." ;
} else {     
    foreach ($tijd_array as $tijd) {
        $tijd_letter = substr($tijd, -1); 
        $tijd_aantal = substr($tijd, 0, -1) ;
        switch ($tijd_letter) {
            case "s":
                $tijd_totaal += $tijd_aantal * 1 ;
                break ;
            case "m":
                $tijd_totaal += $tijd_aantal * 60 ;
                break ;
            case "u":
                $tijd_totaal += $tijd_aantal * 3600 ;
                break ;
            case "d":
                $tijd_totaal += $tijd_aantal * 86400 ;
                break ;       
        }
    }
    
    echo "De totale tijd is $tijd_totaal seconden" . PHP_EOL ;
}
?>
