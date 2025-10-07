<?php

$idade = 17;
$mensagem = "";

switch ($idade) {
    case $idade <= 12;
        $mensagem = "Criança";
        break;
    case $idade > 12 && $idade < 18;
        $mensagem = "Adolescente";
        break;
    case $idade >= 18 && $idade > 60;
        $mensagem = "Adulto(a)";
        break;
    default:
        $mensagem = "Idoso(a)";
        break;
}

echo $mensagem;