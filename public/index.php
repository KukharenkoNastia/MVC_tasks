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

in_array('Этот массив содержит строки текста.', $textArray) ? $res = 'Строка есть в массиве' : $res = 'Нет такого';

echo $res;

array_search('Этот сив содержит строки текста.', $textArray) ? $str_res = 'Строка есть в массиве' : $str_res = 'Нет такого';

echo $str_res;