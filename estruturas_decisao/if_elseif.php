<?php

$idade = 17;
$mensagem = "";

if ($idade <= 12) {
    $mensagem = "Criança";
} elseif ($idade > 12 && $idade < 18) {
    $mensagem = "Adolescente";
} elseif ($idade > 18 && $idade < 60) {
    $mensagem = "Adulto(a)";
} else {
    $mensagem = "Idoso(a)";
}

echo $mensagem;