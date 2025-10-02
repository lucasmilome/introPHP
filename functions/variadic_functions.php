<?php

function soma(int ...$numbers): int {
    $total = 0;

    foreach($numbers as $number) {
        $total += $number;
    }

    return $total;
}

echo soma(10, 5, 100, 150) . PHP_EOL;
echo soma(33, 10) . PHP_EOL;