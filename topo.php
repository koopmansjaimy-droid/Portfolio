<?php

$antwoorden = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico-Stad",
    "De Verenigde Staten" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentinië" => "Buenos Aires",
    "Egypte" => "Cairo",
    "Engeland" => "Londen",
];

$score = 0;

foreach ($antwoorden as $land => $stad) {
    $antwoord = readline("Wat is de hoofdstad van $land?");

    if (strtolower(trim($antwoord)) == strtolower($stad)) {
        echo "Goed gedaan!" . PHP_EOL;
        $score++;
    } else {
        echo "Helaas! De hoofdstad van $land is $stad." . PHP_EOL;
        echo "Het juiste antwoord was $stad." . PHP_EOL;
    }
}

echo "Je bent klaar met de quiz!" . PHP_EOL;
echo "Je hebt $score van de " . count($antwoorden) . " goed!" . PHP_EOL;


?>