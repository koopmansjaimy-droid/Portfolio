<?php

if ($argc < 2) {
    echo "Geen tijdseenheden opgegeven." . PHP_EOL;
    exit;
}

$totaal = 0;
$eenheden = ["s", "m", "u", "d"];
foreach (array_slice($argv , 1) as $input) {
    $waarde = (int) substr($input, 0, -1);
    $eenheid = substr($input, -1);

    if (in_array($eenheid, $eenheden)) {        
        switch ($eenheid) {
            case "d":
                $totaal += $waarde * 86400;
                break;

            case "u":
                $totaal += $waarde * 3600;
                break;

            case "m":
                $totaal += $waarde * 60;
                break;

            case "s":
                $totaal += $waarde;
                break;
            default:
                break;
        }
    }
}
echo "De totale tijd is $totaal seconden" . PHP_EOL;
?>