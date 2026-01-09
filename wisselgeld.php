<?php

const MONEY_UNITS = [
    5000 => "50 euro", 
    2000 => "20 euro", 
    1000 => "10 euro", 
    500 => "5 euro", 
    200 => "2 euro", 
    100 => "1 euro",
    50 => "50 cent", 
    20 => "20 cent", 
    10 => "10 cent", 
    5 => "5 cent", 
    2 => "2 cent", 
    1 => "1 cent"
];

function valideerInput(array $argv): float
{
    if (!isset($argv[1])) {
        throw new Exception("Geen bedrag meegegeven. Gebruik: php wisselgeld.php <bedrag>");
    }
    
    $input = $argv[1];

    if (!is_numeric($input)) {
        throw new Exception("Foutive invoer: '{$input}'. Is geen geldig getal.");
    }

    $bedrag = round((float) $input, 2);

    if ($bedrag <= 0) {
        throw new Exception("Input moet een positief getal zijn");
    }
    
    return $bedrag;
}

function converteerInput(float $invoer): int
{
    return round($invoer * 100 / 5) * 5;
}
function ToonWisselgeld(int $restbedrag): void 
{
    if ($restbedrag < 1) {
        echo "Geen wisselgeld" . PHP_EOL;
        return;
    }
    
    foreach (MONEY_UNITS as $munten => $munt) {
        $aantal = floor($restbedrag / $munten);
        if ($aantal > 0) {
            echo $aantal . " x " . $munt . PHP_EOL;
            $restbedrag = $restbedrag % $munten;
        }
    }
}

try {
    $bedrag = valideerInput($argv);
    $restbedrag = converteerInput($bedrag);
    ToonWisselgeld($restbedrag);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}