<?php

echo "hoeveel activiteiten wil je toevoegen";
$activiteiten = readline();

if (!is_numeric($activiteiten) || $activiteiten <= 0) {
    echo "geen geldig getal" . PHP_EOL;
    exit;
}

$bucketlist = [];

for ($i = 1; $i <= $activiteiten; $i++) {
    $activiteiten = readline("Wat wil je toevoegen aan je bucketlist? (" . $i . "/" . $activiteiten . ")");
    $bucketlist[] = $activiteiten;
}

echo "je bucketlist: " . PHP_EOL;
foreach ($bucketlist as $activiteit) {
    echo $activiteit . PHP_EOL;
}

?>