<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$str1 = 'NasQWE';
$str2 = 'EWQNAS';

function isPalindrome(string $str1, string $str2): bool
{
    $str1 = str_split(strtolower(cleanString($str1)));
    $str2 = str_split(strtolower(cleanString($str2)));

    if (!((count($str1) == count($str2)) && ($str1 == array_reverse($str2)))) {
        return false;
    }
    return true;
}

function cleanString(string $input): string
{
    $cleanStr = trim($input);
    $cleanStr = preg_replace('/\s+/', ' ', $cleanStr);
    $cleanStr = str_replace(' ', '', $cleanStr);

    return preg_replace('/[^\w\s]/u', '', $cleanStr);
}

function isAnagram(string $str1, string $str2): bool
{
    $arr1 = str_split(strtolower(cleanString($str1)));
    $arr2 = str_split(strtolower(cleanString($str2)));

    sort($arr1);
    sort($arr2);

    if (!(array_diff($arr1, $arr2) || array_diff($arr2, $arr1))) {
        return true;
    }
    return false;
}

echo $str1;
echo '<br>';
echo $str2;
echo '<br>';

echo isAnagram($str1, $str2) ? 'Является анаграммой' : 'Не является анаграммой';

echo '<br>';
echo isPalindrome($str1, $str2) ? 'Является палиндромом' : 'Не является палиндромом';
