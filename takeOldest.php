<?php

namespace App\Users;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function Funct\Collection\firstN;

function takeOldest($users, $numberOutput = 1)
{
    usort($users, fn($a, $b) => $a['birthday'] <=> $b['birthday']);
    return firstN($users, $numberOutput);
}

$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];
 
print_r(takeOldest($users));
# Array (
#     ['name' => 'Rob', 'birthday' => '1975-01-11']
// # )