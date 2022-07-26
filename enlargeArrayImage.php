<?php

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use Funct\Collection;

function enlargeArrayImage($image)
{
    $result = [];
    $array = [];
    $count = count($image);
    for ($i = 0; $i < $count; $i ++) {
        $result[$i * 2] = $image[$i];
        $result[$i * 2 + 1] = $image[$i];
    }

    for ($i = 0; $i < count($result); $i ++) {
        for ($j = 0; $j < count($result[$i]); $j++) {
            $array[$i][$j * 2] = $result[$i][$j];
            $array[$i][$j * 2 + 1] = $result[$i][$j];
        }
    }
    return $array;
}

$image =  [
    ['x']
];
// ****
// *  *
// *  *
// ****
 
print_r(enlargeArrayImage($image));
// ********
// ********
// **    **
// **    **
// **    **
// **    **
// ********
// ********
//print_r(Collection\zip(['*',' ',' ','*'], ['*',' ',' ','*']));