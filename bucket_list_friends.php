<?php

echo "Hoeveel vrienden zal ik vragen om hun droom?";
$aantal = (int) readline();

$vrienden = [];

for ($i = 1; $i <= $aantal; $i++) {
    echo "Wat is de naam van je vriend?";
    $naam = trim(fgets(STDIN));
    
    echo "Wat is je droom?";
    $droom = trim(fgets(STDIN));
    
    $vrienden[$naam] = $droom;
}

echo "Je vrienden: " . PHP_EOL;
foreach ($vrienden as $naam => $droom) {
    echo "$naam heeft als droom $droom" . PHP_EOL;
}


?>