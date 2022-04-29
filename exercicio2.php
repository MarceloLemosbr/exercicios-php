<?php

function primos($inicial, $final)
{
    $numerosPrimos = [];

    while ($inicial < $final) {
        for ($i = 2; $i <= $inicial; $i++) {
            if ($i === $inicial) {
                $numerosPrimos[] = $inicial;
            }
            if ($inicial % $i === 0) {
                break;
            }
        }
        $inicial++;
    }

    return "Resposta: Encontrados ". count($numerosPrimos) ." números primos, são eles: " . implode(",", $numerosPrimos);
}