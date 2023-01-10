<?php

// echo 20 + 10 . PHP_EOL;
// echo 20 - 10 . PHP_EOL;
// echo 20 * 10 . PHP_EOL;
// echo 20 / 10 . PHP_EOL;

// 20 > 10;
// 20 < 10;
// 10 == 10;

echo 'Ik ga twee getallen met elkaar vermenigvuldigen' . PHP_EOL;

//echo 'Eerste getal?' . PHP_EOL;

$get1 = readline("Eerste getal?" . PHP_EOL);

//echo 'Tweede getal?' . PHP_EOL;

$get2 = readline("Tweede getal?" . PHP_EOL);

$result = $get1 * $get2;
echo "Uw resultaat: $result"; // . $get1 * $get2; 

?>