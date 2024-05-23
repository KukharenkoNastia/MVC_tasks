<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$str1 = 'NasQWE';
$str2 = 'EWQNas';

function anagram($str1, $str2):string
{
    $arr1 = str_split(strtolower(cleanString($str1)));
    $arr2 = str_split(strtolower(cleanString($str2)));
    sort($arr1);
    sort($arr2);
    print_r('<pre>');
    print_r($arr1);
    print_r($arr2);
    if(array_diff($arr1, $arr2) || array_diff($arr2, $arr1))
    {
        return 'Не являются анаграммой';
    } else return 'Являются анаграммой';
}

echo $str1;
echo '<br>';
echo $str2;
echo '<br>';
echo anagram($str1, $str2);

function palindrome($str1, $str2):string
{
    $str1 = str_split(strtolower(cleanString($str1)));
    $str2 = str_split(strtolower(cleanString($str2)));

    if((count($str1) == count($str2)) && ($str1 == array_reverse($str2))){
        return 'Является палиндромом';
    } else return 'Не является палиндромом';
}

function cleanString($input):string
{
    $cleanStr = trim($input);
    $cleanStr = preg_replace('/\s+/', ' ', $cleanStr);
    $cleanStr = str_replace(' ', '', $cleanStr);
    return preg_replace('/[^\w\s]/u', '', $cleanStr);
}

echo '<br>';
echo palindrome($str1, $str2);
