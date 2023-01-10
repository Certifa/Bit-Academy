<?php

$choice = readline('Welke operatie wil je uitvoeren? (+, -, %) ');

if ($choice == '+') {
      echo '';
     } elseif ($choice == '-') {
    echo '';
} elseif ($choice == '%') {
    echo '';
} else {
    exit("'$choice' is geen geldige operatie");
}

$get1 = readline('Eerste getal? ');

is_numeric($get1);

if (is_numeric($get1)) {
    echo '';
} else {
    exit("'$get1' is geen geldige operatie, geen getal");
}

$get2 = readline('Tweede getal? ');

is_numeric($get2);

if (is_numeric($get2)) {
    echo '';
} else {
    exit("'$get2' is geen geldige operatie. geen getal");
}


if ($choice == '+') {
    echo 'Uw resultaat is: ' . $get1 + $get2;
} elseif ($choice == '-') {
    echo 'Uw resultaat is: ' . $get1 - $get2;
} elseif ($choice == '%') {
    echo 'Uw resultaat is: ' .  $get1 % $get2;
}
 

?>
