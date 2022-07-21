<?php

namespace App\Users;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function Funct\Collection\flatten;

function getGirlFriends($users)
{
    $result = [];
    foreach ($users as ['friends' => $friends]) {
        $result[] = array_filter($friends, fn($friend) => $friend['gender'] === 'female');
    }
    return flatten($result);
}

function getGirlFriendsTeacher(array $users)
{
    $allFriendsLists = array_map(fn($user) => $user['friends'], $users);
    $friends = flatten($allFriendsLists);
    $girlFriends = array_filter($friends, fn($user) => $user['gender'] === 'female');

    return array_values($girlFriends);
}

$users = [

    ['name' => 'Tirion', 'friends' => [

        ['name' => 'Mira', 'gender' => 'female'],

        ['name' => 'Ramsey', 'gender' => 'male']

    ]],

    ['name' => 'Bronn', 'friends' => []],

    ['name' => 'Sam', 'friends' => [

        ['name' => 'Aria', 'gender' => 'female'],

        ['name' => 'Keit', 'gender' => 'female']

    ]],

    ['name' => 'Rob', 'friends' => [

        ['name' => 'Taywin', 'gender' => 'male']

    ]],

];

 

print_r(getGirlFriends($users));