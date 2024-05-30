<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$str1 = 'some string';
$str2 = 'sOme strIng';

function strCompare(string $str1, string $str2): string
{
    strcasecmp($str1, $str2) === 0 ? $str = 'эквивалентны без учета регистра' : $str = 'не эквивалентны';
    $format = 'Строки %s и %s %s';
    return sprintf($format, $str1, $str2, $str);
}

echo strCompare($str1, $str2);

$strArr = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];

function strnatcmpString(array $strArr): array
{
    usort($strArr, "strnatcmp");
    return $strArr;
}

function sortString(array $strArr): array
{
    sort($strArr);
    return $strArr;
}

print_r('<pre>');
print_r(strnatcmpString($strArr));
print_r(sortString($strArr));
