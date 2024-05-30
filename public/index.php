<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

function replaceString(string $input): string
{
    return str_replace('e', 'EEE', $input);
}

function replaceRegString(string $input): string
{
    return preg_replace('/[^\w]/', '', $input);
}

function position(string $input): int
{
    return strpos($input, 'e');
}

$strings = [
    '  Hello,   world!  ',
    'This    is    a test. ',
    '    PHP is  great!!! ',
    ' Clean   this   string...  ',
    '\tWhitespace\tand\nnewlines\n',
];

foreach ($strings as $str) {
    echo $str;
    echo '<br>';

    echo replaceString($str);
    echo '<br>';

    echo 'Элемент е найден в строке ' . replaceRegString($str) . ' на месте ' . position(replaceRegString($str));
    echo '<br>';
}
