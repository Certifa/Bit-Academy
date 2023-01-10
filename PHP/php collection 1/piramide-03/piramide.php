<?php

// Hoeveel stapels wilt hij/zij hebben?
$input = readline("Hoeveel stapels wil je hebben? ");

for ($i = 0; $i < $input; $i++) { 
    echo str_repeat("*", $i) . "*" . PHP_EOL;
}


?>
