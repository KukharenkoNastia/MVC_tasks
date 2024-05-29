<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$textArray = [
    'Привет, мир!',
    'Добро пожаловать в PHP.',
    'Массивы в PHP очень гибкие.',
    'Этот массив содержит строки текста.',
    'Желаю вам хорошего дня!'
];

$numbersArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$new_arr = array_merge($textArray, $numbersArray);

print_r('<pre>');
print_r($new_arr);

unset($new_arr[10]);

echo 'Массив после unset()';
print_r($new_arr);

$removed = array_splice($new_arr, 3, 6);

echo 'Массив после array_splice()';
print_r($new_arr);
print_r($removed);

echo 'Массив после array_shift()';
print_r(array_shift($new_arr));
echo '<br>';
print_r($new_arr);

echo 'Массив после array_pop()';
print_r(array_pop($new_arr));
echo '<br>';
print_r($new_arr);

