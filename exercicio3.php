<?php

$arrayRandom = [];

for ($i = 0; $i < 20; $i++) {
    $arrayRandom[] = rand(1, 10);
}

$valoresRepetidos = array_count_values($arrayRandom);

$valoresNaoRepetidos = array_filter($valoresRepetidos, function ($i) {
    return $i === 1;
});

echo "Os números que não se repetem são o " . implode(", ", array_keys($valoresNaoRepetidos));