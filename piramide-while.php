<?php

echo ("Hoeveel stapels wilt je hebben?");

$stapels = readline("");
$i = 1;
while ($i <= $stapels) {
    $j = 1;
    while ($j <= $i) {
        echo "*";
        $j++;
    }
    echo PHP_EOL;
    $i++;
}

?>