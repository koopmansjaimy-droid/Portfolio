<?php

echo "Welke operator wilt u gebruiken? (+, -, %) ";
$operator = readline();

echo "Geef het eerste getal: ";
$getal1 = readline();

echo "Geef het tweede getal: ";
$getal2 = readline();

if (!is_numeric($getal1) || !is_numeric($getal2)) {
    echo "geen getal." . PHP_EOL;
    exit;
}

if ($operator == "+") {
    echo $getal1 + $getal2 . PHP_EOL;
} elseif ($operator == "-") {
    echo $getal1 - $getal2 . PHP_EOL;
} elseif ($operator == "%") {
    echo $getal1 % $getal2 . PHP_EOL;
} else {
    echo "geen geldige operatie." . PHP_EOL;
}

?>