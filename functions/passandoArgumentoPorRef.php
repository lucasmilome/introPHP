<?php

$num = 10;

function total(int $n): int {
    return $n += 10;
}

echo "Valor retornado pela função: " . total($num) . PHP_EOL;
echo "Valor da variável \$num $num";