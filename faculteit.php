<?php

echo ("Van welk getal wil je de faculteit weten?");

function faculteit($getal) 
{

    $faculteit = 1;
    for ($i = 1; $i <= $getal; $i++) {
        $faculteit = $faculteit * $i;
    }
    return $faculteit;
}

echo faculteit(readline()) . PHP_EOL;

?>