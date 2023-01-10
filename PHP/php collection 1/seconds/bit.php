<?php

if (count($argv) < 2) {
    exit(0);
} 

$time = (int) substr($argv[1], 0, -1);
$type = substr($argv[1], -1);

if ($type == "d") {
        echo 60 * 60 * 24 * $time . " seconden" . PHP_EOL;
} else if ($type == "u") {
    echo 60 * 60 * $time . " seconden" . PHP_EOL;
} else if ($type == "m") {
    echo 60 * $time . " seconden" . PHP_EOL;
} else if ($type == "s") {
    echo $time . " seconden" . PHP_EOL;
}
