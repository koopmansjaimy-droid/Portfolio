<?php

echo ("Hoeveel stapels wilt je hebben?");

$stapels = readline("");

$i = 1;
$star = "";

while ($i <= $stapels) {
    $star .= "* ";
    echo $star . PHP_EOL;
    $i++;
}


?>