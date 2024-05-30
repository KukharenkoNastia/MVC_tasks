<?php

declare(strict_types=1);

use function MVCTask\isGoodPassword;
use function MVCTask\matchIp;
use function MVCTask\phoneNum;
use function MVCTask\removeDuplicate;

require __DIR__ . './../vendor/autoload.php';

$phoneNumbers = [
    '8 (912) 345-67-89',
    '+7 912 345 6789',
    '79123456789',
    '8-912-345-6789',
    '89123456789',
    '897987987'
];

foreach ($phoneNumbers as $num) {
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

foreach ($dates as $date) {
    echo date('d.m.Y', strtotime($date));
    echo '<br>';
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
    isGoodPassword($pass) ? $str = 'безопасный' : $str = 'небезопасный';
    $format = '%s является %s паролем';
    echo sprintf($format, $pass, $str);
    echo '<br>';
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

foreach ($ipAddresses as $address) {
    matchIp($address) ? $str = 'соответствует' : $str = 'не соответствует';
    $format = '%s - Ip адресс %s шаблону';
    echo sprintf($format, $address, $str);
    echo '<br>';
}

$text = "В темном темном лесу, среди зеленых зеленых деревьев, жила жила маленькая маленькая девочка. Она любила любила гулять гулять по лесу и собирать собирать яркие яркие ягоды.";

echo removeDuplicate($text);
echo '<br>';
