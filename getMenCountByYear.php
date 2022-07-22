<?php

function getMenCountByYear($users)
{
    $result = [];
    $filtered_array = array_filter($users, fn($user) => $user['gender'] === 'male');
    $result = array_reduce($filtered_array, function ($acc, $user) {
        $year = substr($user['birthday'], 0, 4);
        if (!(array_key_exists($year, $acc))) {
            $acc[$year] = 0;
        }
        $acc[$year] ++;
        return $acc;
    }, []);
    return $result;
}

$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2010-11-03'],
    ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
    ['name' => 'Robb','gender' => 'male', 'birthday' => '1980-05-14'],
    ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2005-11-03'],
    ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
    ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
    ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03']
];

 

print_r(getMenCountByYear($users));

# Array (

#     1973 => 3,

#     1963 => 1,

#     1980 => 2,

#     2012 => 1,

#     1999 => 1

# );