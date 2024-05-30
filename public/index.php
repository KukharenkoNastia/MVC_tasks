<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

function worldCount(string $string): int
{
    return str_word_count($string, 0);
}

function splitStr(string $str, string $separator): array
{
    return explode($separator, $str);
}

function removeDuplicate(string $str): string
{
    return implode(' ', array_unique(explode(' ', $str)));
}

$str = 'Return information information about about words used in a string';

echo $str;
echo '<br>';

$num = worldCount($str);
$format = 'Количество слов в строке: %s';
echo sprintf($format, $num);

print_r('<pre>');
print_r(splitStr($str, ' '));

echo removeDuplicate($str);
