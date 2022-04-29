<?php

function seculoAno($ano)
{
    $seculo = intdiv($ano, 100);

    if ($ano / 100 != intdiv($ano, 100)) {
        $seculo = intdiv($ano, 100) + 1;
    }

    return $seculo;
}