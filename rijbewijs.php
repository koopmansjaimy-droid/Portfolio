<?php

echo "geef je leeftijd: ";
$leeftijd = readline();

if ($leeftijd < 16.5) {
    echo "Helaas! Je mag niet rijden." . PHP_EOL;
} else {
    echo "Je mag rijden." . PHP_EOL;
}

?>