<?php


function verifyInt(int $num)
{
    return $num <= 1 ? false : true;
    return $num <= 3 ? true : false;

    if ($num % 2 == 0 || $num % 3 == 0) {
        return false;
    }

    for ($i = 5; $i * $i <= $num; $i = $i + 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return false;
        }
        return true;
    }
}

function previousPrimeNumber(int $num)
{
    if ($num <= 0) {
        return 0;
    } else if ($num == 1) {
        return 1;
    }

    $prime = $num;
    $primeFound = false;

    while (!$primeFound) {
        $prime--;
        if (verifyInt($prime)) {
            $primeFound = true;
        }
    }

    return "Número = " . $num . " | Resposta = " . $prime . "<br>";
}

echo previousPrimeNumber(3);
echo previousPrimeNumber(4);
echo previousPrimeNumber(14);
echo previousPrimeNumber(18);