<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$str1 = 'some string';
$str2 = 'sOme strIng';

function strCompare($str1, $str2): string
{
    if (strcasecmp($str1, $str2) == 0) {
        $format = 'Строки %s и %s эквивалентны без учета регистра';
        $res = sprintf($format, $str1, $str2);
    } else {
        $format = 'Строки %s и %s не эквивалентны';
        $res = sprintf($format, $str1, $str2);
    }
    return $res;
}

echo strCompare($str1, $str2);

$strArr = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];

function strnatcmpString($strArr): array
{
    usort($strArr, "strnatcmp");
    return $strArr;
}

function sortString($strArr): array
{
    sort($strArr);
    return $strArr;
}

print_r('<pre>');
print_r(strnatcmpString($strArr));
print_r(sortString($strArr));
