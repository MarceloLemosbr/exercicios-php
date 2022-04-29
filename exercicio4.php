<?php

function sequenciaCrescente($array)
{
    if (count($array) === 1) {
        return true;
    }

    $arrayDesordenada = $array;
    $arrayOrdenada = $array;

    for ($i = 0; $i < count($array); $i++) {  
        unset($arrayDesordenada[$i]);
        unset($arrayOrdenada[$i]);
        sort($arrayOrdenada);

        $valoresRepetidos = array_count_values($arrayDesordenada);

        // Verifica se a array possui valores repetidos apos a remocao do elemento na posicao `$i`
        if (count($valoresRepetidos) !== count($arrayDesordenada)) {
            $arrayDesordenada = $array;
            $arrayOrdenada = $array;
            continue;
        }

        // Verifica se a array com elemento removido é igual a array organizada em ordem crescente
        if (array_values($arrayDesordenada) === array_values($arrayOrdenada)) {
            return true;
        }

        $arrayDesordenada = $array;
        $arrayOrdenada = $array;
    }

    return false;
}