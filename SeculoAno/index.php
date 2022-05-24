<?php

echo $seculoAno = seculoAno('1905');
echo $seculoAno = seculoAno('1700');

function seculoAno($ano)
{
    if ($ano < 1) {
        return "Ano inválido";
    } else if ($ano == 1) {
        return "Século I";
    }
    $calc = (($ano - 2) / 100) + 1;

    $seculo = explode(".", $calc);

    return  "Ano " . $ano . " - Século " . $seculo[0] . "<br>";
}
