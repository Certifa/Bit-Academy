<?php

$list = array('Japan' => 'Tokyo', 'Mexico' => 'Mexico City', 'USA' => 'Washington', 'India' => 'New Delhi', 'Zuid-Korea' => 'Seoul',
'China' => 'Peking', 'Nigeria' => 'Abuja', 'Argentina' => 'Buenos', 'Egypt' => 'Cairo', 'UK' => 'London');

$count = 0;

foreach ($list as $country => $capital) {
    $answer = readline('Wat is de hoofstad van ' . $country . '?' . PHP_EOL);
    if ($answer != $capital) {
        readline('Helaas, ' . $answer . ' is niet de hoofdstad van ' . $country . PHP_EOL . 'Het correcte antwoord is: ' . $capital . PHP_EOL);
    } else if ($answer == $capital) {
        readline('Correct! ' . PHP_EOL);
        $count++;
    }
}

echo ('Je hebt ' . $count . ' van de 10 goed geraden!' . PHP_EOL);

?>
