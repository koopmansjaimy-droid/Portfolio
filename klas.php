<?php

echo ("Wie zit er in de klas?");
$input = readline();

$klas = explode(",", $input);

echo "De studenten die in de klas zijn?";
foreach ($klas as $student) {
    echo $student . PHP_EOL;
}

?>