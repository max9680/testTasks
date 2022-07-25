<?php
 
namespace App\Emails;

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

function getFreeDomainsCount($emails)
{
    $emailsDomains = array_map(fn($email) => explode("@", $email)[1], $emails);
    $freeEmails = array_filter($emailsDomains, fn($email) => in_array($email, FREE_EMAIL_DOMAINS));
    $result = array_reduce($freeEmails, function ($acc, $email) {
        if (!(array_key_exists($email, $acc))) {
            $acc[$email] = 0;
        }
        $acc[$email] ++;
        return $acc;
    }, []);
    return $result;
}

$emails = [
    'info@gmail.com',
    'info@yandex.ru',
    'info@hotmail.com',
    'mk@host.com',
    'support@hexlet.io',
    'key@yandex.ru',
    'sergey@gmail.com',
    'vovan@gmail.com',
    'vovan@hotmail.com'
];
 
print_r(getFreeDomainsCount($emails));
# Array (
#     'gmail.com' => 3
#     'yandex.ru' => 2
#     'hotmail.com' => 2
#  )