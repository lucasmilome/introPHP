<?php

$nome = "Fulano de Tal";
$idade = 40;
$peso = 90.5;
$estaAtivo = true;

echo $nome . PHP_EOL;
echo $idade . PHP_EOL;
echo $peso . PHP_EOL;
// Determinando a saída com operador ternário "condição" ? "verdadeiro" : "falso"
echo "Está ativo: " . ($estaAtivo ? "Sim" : "Não") . PHP_EOL;