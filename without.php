<?php

function without($items, ...$numbers)
{
    //print_r($numbers);
    $filtered = $items;
    foreach ($numbers as $number) {
       // print_r("$number\n");
        $filtered = array_filter($filtered, function ($item) use ($number) {
            return $item !== $number;
        });
        //print_r($filtered);
    }
    return array_values($filtered);
}

//print_r(without([3, 4, 10, 4, 'true'], 4)); // [3, 10, 'true']

//print_r(without(['3', 2], 0, 5, 11)); // ['3', 2]

//print_r(without([], null));

print_r(without([3, 4, 10, 'true'], 3, 4));