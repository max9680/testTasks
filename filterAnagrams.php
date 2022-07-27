<?php

function filterAnagrams($word, $array)
{
    $wordArray = str_split($word);
    $filteredArray = array_filter($array, function ($item) use ($wordArray) {
        $itemArray = str_split($item);
        $arrayDiff1 = array_diff($wordArray, $itemArray);
        $arrayDiff2 = array_diff($itemArray, $wordArray);
        // for ($i = 0; $i < count($wordArray); $i++) {

        // }
        return (count($arrayDiff1) === 0 && count($arrayDiff2) === 0);
    });
    return array_values($filteredArray);
}

print_r(filterAnagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']));
// ['aabb', 'bbaa']

//print_r(filterAnagrams('racer', ['crazer', 'carer', 'racar', 'caers', 'racer']));
// ['carer', 'racer']

//filterAnagrams('laser', ['lazing', 'lazy',  'lacer']);
// []
// $arr1 = str_split('abba');
// $arr2 = str_split('abcd');
// print_r(array_diff($arr2, $arr1));