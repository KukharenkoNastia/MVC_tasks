<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

echo 'Массив до сортировки пузырьком';

function generateArray(): array
{
    $numbers = range(10, 20);
    shuffle($numbers);

    return $numbers;
}

$numbers = generateArray();

print_r('<pre>');
print_r($numbers);

for ($i = 0; $i < count($numbers); $i++) {
    for ($n = 0; $n < count($numbers) - $i - 1; $n++) {
        if ($numbers[$n] > $numbers[$n + 1]) {
            $temp = $numbers[$n];
            $numbers[$n] = $numbers[$n + 1];
            $numbers[$n + 1] = $temp;
        }
    }
}

echo 'Массив после сортировки пузырьком';
print_r($numbers);

echo 'Массив до сортировки слиянием';

function generateArrayMegre(): array
{
    $numbers_merge = [];

    for ($i = 0; $i < 11; $i++) {
        $numbers_merge[] = rand(1, 50);
    }

    return $numbers_merge;
}

$numbers_merge = generateArrayMegre();

print_r($numbers_merge);

function sortArr($arr): array
{
    if (count($arr) <= 1) {
        return $arr;
    }

    $middle = (int)floor(count($arr) / 2);
    $arr1 = array_slice($arr, 0, $middle);
    $arr2 = array_slice($arr, $middle);

    $arr1 = sortArr($arr1);
    $arr2 = sortArr($arr2);

    return sortMerge($arr1, $arr2);
}

function sortMerge($arr1, $arr2): array
{
    $result = [];
    $ind1 = 0;
    $ind2 = 0;

    while ($ind1 < count($arr1) && $ind2 < count($arr2)) {
        if ($arr1[$ind1] <= $arr2[$ind2]) {
            $result[] = $arr1[$ind1];
            $ind1++;
        } else {
            $result[] = $arr2[$ind2];
            $ind2++;
        }
    }

    while ($ind1 < count($arr1)) {
        $result[] = $arr1[$ind1];
        $ind1++;
    }

    while ($ind2 < count($arr2)) {
        $result[] = $arr2[$ind2];
        $ind2++;
    }

    return $result;
}

echo 'Массив после сортировки слиянием';
print_r(sortArr($numbers_merge));
