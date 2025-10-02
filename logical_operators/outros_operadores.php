<?php 

$a = true;
$b = false;

$reposta1 = $a && $b;
$reposta2 = $a and $b;


echo var_dump($reposta1);
echo var_dump($reposta2);
echo var_dump($reposta2 = $a and $b);