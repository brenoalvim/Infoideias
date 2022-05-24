<?php

$arr = array(
    array(25, 22, 18),
    array(10, 15, 13),
    array(24, 5, 2),
    array(80, 17, 15)
);


echo secondLargest($arr);

function secondLargest(array $array)
{
    $largest = 0;
    $secondLargest = 0;

    foreach ($array as $value) {
        foreach ($value as $number) {
            if ($number > $largest) {
                $secondLargest = $largest;
                $largest = $number;
            } else if ($number > $secondLargest) {
                $secondLargest = $number;
            }
        }
    }

    return "O segundo maior número é " . $secondLargest;
}
