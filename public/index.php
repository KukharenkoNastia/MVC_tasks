<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$textArray = [
    '      Hello, world!  ',
    '    Welcome to PHP!',
    '   Массивы в PHP очень гибкие!  ',
    '  Этот массив содержит строки текста!',
    '   Желаю вам хорошего дня!'
];

function addEnd(string $el): string
{
    $format = '%s! The best!';
    return sprintf($format, $el);
}

echo 'Массив после array_map()';
echo '<br>';
print_r('<pre>');
print_r(array_map('addEnd', $textArray));

function trim_el(string $el): string
{
    return trim($el);
}

echo 'Массив после trim()';
echo '<br>';
print_r(array_map('trim_el', $textArray));

function string_up(string $el): string
{
    return strtoupper($el);
}

echo 'Массив после strtoupper()';
echo '<br>';
print_r(array_map('string_up', $textArray));

function string_low(string $el): string
{
    return strtolower($el);
}

echo 'Массив после strtolower()';
echo '<br>';
print_r(array_map('string_low', $textArray));

function string_replace(string $el): string
{
    return str_replace('!', '...', $el);
}

echo 'Массив после str_replace()';
echo '<br>';
print_r(array_map('string_replace', $textArray));
