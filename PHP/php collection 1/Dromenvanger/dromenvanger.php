<?php

$aantal = readLine("Hoeveel vrienden zal ik vragen om hun droom? ") . PHP_EOL;

if (!is_numeric($aantal)) {
    exit("$aantal is geen getal") . PHP_EOL;
}

$list = [];

for ($i = 0; $i < $aantal; $i++) {
    $naam = readLine("Wat is jouw naam? ");
    $dromen[$naam] = $naam;
    $aantaldromen = readLine("Hoeveel dromen ga je opgeven? ");
    for ($j = 0; $j < $aantaldromen; $aantaldromen--) {
        $droom = readLine("Wat is jouw droom? ");
        $list[$naam][] = $droom;
    }
}


foreach ($list as $naam => $list) {
    echo $naam ;
    foreach ($list as $droom) {
        echo " Heeft als droom: " . $droom . PHP_EOL;
    }
}

?>
