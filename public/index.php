<?php
require __DIR__ . './../vendor/autoload.php';

$textArray = [
    "Привет, мир!",
    "Добро пожаловать в PHP.",
    "Массивы в PHP очень гибкие.",
    "Этот массив содержит строки текста.",
    "Желаю вам хорошего дня!"
];

$numbersArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

print_r('<pre>');
print_r(array_merge($textArray,$numbersArray));

?>