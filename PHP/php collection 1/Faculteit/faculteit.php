<?php

$faculteit = readline("Van welk getal wil je de faculteit weten? ");

$num = 1;

for ($i = 1; $i <= $faculteit; $i++) { 
    $num = $num * $i;
}
echo "De faculteit van $faculteit is $num";

?>
