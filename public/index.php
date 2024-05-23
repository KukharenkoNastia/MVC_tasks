<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

function phoneNum($str):string
{
    $number = preg_replace('/\D/', '', $str);
    if(strlen($number)==11){
        $number[0]='7';
        $number[1]='9';
        return preg_replace('/(\d)(\d{3})(\d{3})(\d{4})/', '+$1 ($2) $3-$4', $number);
    } else return 'Недостаточно символов';
}

$phoneNumbers = [
    '8 (912) 345-67-89',
    '+7 912 345 6789',
    '79123456789',
    '8-912-345-6789',
    '89123456789',
    '897987987'
];

foreach ($phoneNumbers as $num){
    echo phoneNum($num);
    echo '<br>';
}

$dates = [
    '22.05.2024',
    '2024-05-22',
    '2024-05-22T14:30:00Z',
    '22nd May 2024',
    'Wednesday, May 22, 2024',
    '2024-05-22 14:30:00',
    '2023-12-31',
    '2025-01-01',
    '2024/05/22'
];

foreach ($dates as $date){
    echo date('d.m.Y', strtotime($date));
    echo '<br>';
}

function isGoodPassword($pass):string
{
    if(strlen($pass)>8 && preg_match('/[A-Z]/', $pass) && preg_match('/[A-Z]/', $pass) && preg_match('/[a-z]/', $pass) && preg_match('/\d/', $pass) && preg_match('/[\W_]/', $pass)){
        return 'Пароль подходит';
    } return 'Небезопасный пароль';
}

$passwords = [
    "Passw0rd!",
    "password",
    "PASSWORD",
    "Passw0rd",
    "P@ssw0rd",
    "P@ssw"
];

foreach ($passwords as $pass) {
    echo $pass .' - '. isGoodPassword($pass);
    echo '<br>';
}

function matchIp($ip):array
{
    preg_match('/^(([0-9]{1,2}|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]{1,2}|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/', $ip, $matches);
    return $matches;
}

$ipAddresses = [
    '192.168.0.1',
    '255.255.255.255',
    '0.0.0.0',
    '256.256.256.256',
    '192.168.0',
    '192.168.0.256',
    '123.456.78.90'
];

foreach($ipAddresses as $address)
{
    if(matchIp($address)){
        echo $address . ' - Ip адресс соответствует шаблону';
    } else echo $address . ' - Ip адресс НЕ соответствует шаблону';
    echo '<br>';
}

function removeDuplicate($str):string
{
    return implode(' ', array_unique(explode(' ', $str)));
}

$text = "В темном темном лесу, среди зеленых зеленых деревьев, жила жила маленькая маленькая девочка. Она любила любила гулять гулять по лесу и собирать собирать яркие яркие ягоды.";

echo removeDuplicate($text);
echo '<br>';
