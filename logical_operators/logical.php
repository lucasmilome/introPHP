<?php

echo "Tabela verdade do And: " . PHP_EOL;

echo "true and true: " . ((true and true) ? "Verdadeiro" : "Falso") . PHP_EOL;
echo "true and false: " . ((true and false) ? "Verdadeiro" : "Falso") . PHP_EOL;
echo "false and true: " . ((false and true) ? "Verdadeiro" : "Falso") . PHP_EOL;
echo "false and false: " . ((false and false) ? "Verdadeiro" : "Falso") . PHP_EOL;
echo "---------------------------------------------------\n";

echo "Tabela verdade do Or: " . PHP_EOL;

echo "true or true: " . ((true or true) ? "Verdadeiro" : "Falso") . PHP_EOL;
echo "true or false: " . ((true or false) ? "Verdadeiro" : "Falso") . PHP_EOL;
echo "false or true: " . ((false or true) ? "Verdadeiro" : "Falso") . PHP_EOL;
echo "false or false: " . ((false or false) ? "Verdadeiro" : "Falso") . PHP_EOL;

echo "Tabela verdade do Xor: " . PHP_EOL;

echo "true xor true: " . ((true xor true) ? "Verdadeiro" : "Falso") . PHP_EOL;
echo "true xor false: " . ((true xor false) ? "Verdadeiro" : "Falso") . PHP_EOL;
echo "false xor true: " . ((false xor true) ? "Verdadeiro" : "Falso") . PHP_EOL;
echo "false xor false: " . ((false xor false) ? "Verdadeiro" : "Falso") . PHP_EOL;