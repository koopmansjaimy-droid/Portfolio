<?php

$even = readline("Geef een getal: ");

if ($even % 2 == 0) {
    echo "dit is een even getal" . PHP_EOL;
} else {
    echo "dit is een oneven getal" . PHP_EOL;
}

$oneven = readline("Geef een getal: ");

if ($oneven % 2 == 0) {
    echo "dit is een oneven getal" . PHP_EOL;
} else {
    echo "dit is een even getal" . PHP_EOL;
}

?>