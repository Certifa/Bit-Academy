<?php

//Hoeveel activiteiten wilt diegene
$input = readline("Hoeveel activiteiten wil je toevoegen? ");

//Exit als het geen getal is
if (!is_numeric($input)) {
    exit("'$input' is geen getal" . PHP_EOL);
}

//Loop zodat hij loopt met de $input en x aantal keer de vraag stelt
for ($i = 0; $i < $input; $i++) { 
    $toevoegen[$i] = readline("Wat wil jij toevoegen aan jouw bucket list? ");
}

// echo de uitkomst doormiddel met een loop
echo ("Op jouw bucket list staan: ") . PHP_EOL;
for ($i = 0; $i < $input; $i++) { 
    echo ($toevoegen[$i]) . PHP_EOL;
}
?>
