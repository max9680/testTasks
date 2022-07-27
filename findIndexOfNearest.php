<?php

function findIndexOfNearest($array, $number)
{
    if (empty($array)) {
        return null;
    }
    $nearest = array_reduce($array, function ($acc, $arrayNumber) use ($number) {
        return abs($acc - $number) > abs($arrayNumber - $number) ? $arrayNumber : $acc;
    }, $array[0]);
    return array_search($nearest, $array);
}

print_r(findIndexOfNearest([], 2)); // null
//print_r(findIndexOfNearest([15, 10, 3, 4], 0)); // 2