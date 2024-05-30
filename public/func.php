<?php

namespace MVCTask;

use Exception;

function phoneNum(string $str): string
{
    $number = preg_replace('/\D/', '', $str);

    if(! strlen($number) === 11) {
        throw new Exception('Недостаточно символов');
    }

    $number[0] = (string) 7;
    $number[1] = (string) 9;

    return preg_replace('/(\d)(\d{3})(\d{3})(\d{4})/', '+$1 ($2) $3-$4', $number);
}

function isGoodPassword(string $pass): bool
{
    if (strlen($pass) > 8 && preg_match('/[A-Z]/', $pass) && preg_match('/[A-Z]/', $pass) && preg_match('/[a-z]/', $pass) && preg_match('/\d/', $pass) && preg_match('/[\W_]/', $pass)) {
        return true;
    }
    return false;
}

function matchIp(string $ip): array
{
    preg_match('/^(([0-9]{1,2}|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]{1,2}|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/', $ip, $matches);
    return $matches;
}

function removeDuplicate(string $str): string
{
    return implode(' ', array_unique(explode(' ', $str)));
}
