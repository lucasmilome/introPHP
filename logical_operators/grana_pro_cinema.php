<?php 

$lavouCarro = true;
$limpouQuintal = true;
$lavarGaragem = true;

echo "Só vai ao cinema se lavar o carro e limpar o quintal" . PHP_EOL;;

if (($lavouCarro and $limpouQuintal and $lavarGaragem)) {
    echo "Toma esses R$200,00 e vai curtir!" . PHP_EOL;
} else {
    echo "Hoje tu vai assistir é Netflix!" . PHP_EOL;
}

if (($lavouCarro or $limpouQuintal or $lavarGaragem)) {
    echo "Toma esses R$200,00 e vai curtir!" . PHP_EOL;
} else {
    echo "Hoje tu vai assistir é Netflix!" . PHP_EOL;
}

if (($lavouCarro xor $limpouQuintal xor $lavarGaragem)) {
    echo "Toma esses R$200,00 e vai curtir!" . PHP_EOL;
} else {
    echo "Hoje tu vai assistir é Netflix!" . PHP_EOL;
}