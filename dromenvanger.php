<?php

echo "Hoeveel vrienden zal ik vragen om hun droom?";
$aantal = (int) readline();

$dromen = [];

for ($i = 0; $i <= $aantal; $i++) {
    $naam = readline("Wat is de naam van je vriend?");
    $droomaantal = readline("Hoeveel dromen ga je opgeven?: ");

    for ($j = 0; $j <= $droomaantal; $j++) {
        $droom = readline("Wat is je droom?");
    }
    $dromen[$naam] = $droom;
}

foreach ($dromen as $naam => $droom) {
    foreach ($dromen as $droom) {
        echo "$naam heeft dit als droom: $droom" . PHP_EOL;
    }
}

?>