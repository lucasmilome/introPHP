<?php
// Definição da função saudacao()

function saudacao(): void {
    echo "Seja bem vindo ao mundo da programação web!\n";
}

function saudacaoParam(string $name = "Fulano"): string {
    return "$name, seja bem vindo(a) ao mundo da programação web!\n";
}

function soma(int $num1, int $num2): int {
    return $num1 + $num2;
}

saudacao();
echo saudacaoParam($name = "Edson");
echo saudacaoParam();
echo "Soma de 1 + 2 = " . soma(1, 2);