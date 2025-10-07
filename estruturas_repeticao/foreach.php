<?php

// Definição de array (VETOR) em PHP
$alunos = [
    "Reginaldo Costa",
    "Débora Silva",
    "Marta Gomes",
    "Vanessa Gonçalves",
    "Amanda Lemos",
];

foreach ($alunos as $indice => $aluno) {
    echo ($indice + 1) . "º: $aluno" . PHP_EOL;
}