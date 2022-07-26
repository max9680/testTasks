<?php
 
 namespace App\Users;

 $autoloadPath1 = __DIR__ . '/../../../autoload.php';
 $autoloadPath2 = __DIR__ . '/vendor/autoload.php';
 if (file_exists($autoloadPath1)) {
     require_once $autoloadPath1;
 } else {
     require_once $autoloadPath2;
 }

 use Funct\Collection;

 function getManWithLeastFriends($users)
 {
     if (count($users) === 0) {
         return null;
     }
     $result = Collection\minValue(
         $users,
         function ($user) {
             return count($user['friends']);
         }
     );
     return $result;
 }

$users = [];
 
print_r(getManWithLeastFriends($users));
// => ['name' => 'Keit', 'friends' => []];