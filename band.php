<?php

echo ("het album overzicht: ") . PHP_EOL;

$band = [
    "Citizen of Glass" => 4.50,
    "night" => 9,
    "New Eye" => 5,
    "Strange Trails" => 10,
];

$totaal = array_sum($band);
$aantal = count($band);
$gemiddelde = $totaal / $aantal;

foreach ($band as $album => $prijs) {
    echo "$album Kost €$prijs" . PHP_EOL;
}

echo "het totaalbedrag van alle albums is €$totaal" . PHP_EOL;
echo "De gemiddelde prijs van alle albums is €$gemiddelde" . PHP_EOL;

?>