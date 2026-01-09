<?php

function vraag($prompt) 
{
    echo $prompt . PHP_EOL;
    return readline();
}

$landen = [];

$aantal = (int) vraag("Hoeveel landen ga je toevoegen");

for ($i = 0; $i < $aantal; $i++) {
    $land = readline("Wat is het $land?");
    $hoofdstad = readline("Wat is de hoofdstad van $land?");
    $landen[$land] = $hoofdstad;
}

echo ("De volgende landen en steden zitten in de database ") . PHP_EOL;
foreach ($landen as $land => $hoofdstad) {
    echo "$landen, $hoofdstad" . PHP_EOL;
}

?>