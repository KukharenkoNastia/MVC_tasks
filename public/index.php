<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

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

function encoder($str):string
{
    return base64_encode($str);
}
function decoder($str):string
{
    return base64_decode($str);
}

foreach ($dates as $date) {
    $code = encoder($date);
    echo encoder($date);
    echo '<br>';
    echo decoder($code);
    echo '<br>';
}
