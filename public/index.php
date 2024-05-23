<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$str = 'Return information information about about words used in a string';

function worldCount($string): int
{
    return str_word_count($string, 0);
}

echo $str;
echo '<br>';

$num = worldCount($str);
$format = 'Количество слов в строке: %s';
echo sprintf($format, $num);

function splitStr($str, $separator): array
{
    return explode($separator, $str);
}

print_r('<pre>');
print_r(splitStr($str, ' '));

//array_unique(), explode(), c)

function removeDuplicate($str):string
{
    return implode(' ', array_unique(explode(' ', $str)));
}

echo removeDuplicate($str);

