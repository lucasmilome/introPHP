<?php

$diasSemana = [
    "Domingo",
    "Segunda-feira",
    "Terça-feira",
    "Quarta-feira",
    "Quinta-feira",
    "Sexta-feira",
    "Sábado",
];

foreach ($diasSemana as $key => $dia) {
    echo $key + 1 . "º dia da semana: $dia" . PHP_EOL;
}