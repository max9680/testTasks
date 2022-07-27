<?php

function getSameParity($array)
{
    $result = [];
    if (empty($array)) {
        return $result;
    }
    $isEven = (($array[0] % 2) === 0);
    $result = array_filter($array, function ($item) use ($isEven) {
        $isItemEven = (($item % 2) === 0);
        return $isItemEven === $isEven;
    });
    return array_values($result);
}

//getSameParity([]); // []
print_r(getSameParity([5, 0, 1, -3, 10])); // [-1, 1, -3]
