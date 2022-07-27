<?php

function decode($signal)
{
    if (strlen($signal) === 0 || $signal === '|') {
        return $signal = '';
    }
    $signal = (str_replace("|¯", "1", $signal));
    $signal = (str_replace("|_", "1", $signal));
    $signal = (str_replace("_", "0", $signal));
    $signal = (str_replace("¯", "0", $signal));
    return $signal;
}

//$signal = '_|¯|____|¯|__|¯¯¯';
//decode($signal); // '011000110100'

//$signal = '|¯|___|¯¯¯¯¯|___|¯|_|¯';
//decode($signal_2); // '110010000100111'

$signal_3 = '|';
print_r(decode($signal_3)); // '010010000100111'

//print_r(preg_split("//u", $signal, -1, PREG_SPLIT_NO_EMPTY));


//print_r($signal);