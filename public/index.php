<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

use function MVCTask\function\findAllhUrl;
use function MVCTask\function\isEmail;
use function MVCTask\function\isFirstUpper;
use function MVCTask\function\replaceHtml;
use function MVCTask\function\splitStr;

$emails = [
    'test@example.com',
    'invalid-email',
    'user.name+tag+sorting@example.com',
    'user.name@example.co.uk',
    'user_name@example.com',
    'user-name@example.com',
    'user@subdomain.example.com',
    'user@.com',
    '@example.com',
    'user@com',
];

foreach ($emails as $email) {
    isEmail($email) ? $res = 'валидный' : $res = 'не валидный';
    $format = '%s эмейл %s';
    echo sprintf($format, $email, $res);
    echo '<br>';
}

$text = [
    'This is a line.',
    'another line.',
    'Yet Another Line.',
    'more lines here.',
    'Start of the line with uppercase.'
];

foreach ($text as $str) {
    isFirstUpper($str) ? $res = 'большой' : $res = 'маленькой';
    $format = '%s начинается с %s буквы';
    echo sprintf($format, $str, $res);
    echo '<br>';
}

$textHtml = file_get_contents('example.html');;

print_r('<pre>');
print_r(findAllhUrl($textHtml));

$string_split = 'explode(string $separator, string $string, int $limit = PHP_INT_MAX): array';

print_r(splitStr($string_split));

$greetings = [
    'привет',
    'Привет всем!',
    'Привет, как дела?',
    'Скажи привет миру',
    'Приветствую вас',
    'привет-привет',
    'Эй, привет!',
    'Доброе утро, привет',
    'Привет и добро пожаловать',
    'Привет издалека'
];

print_r(array_map(function (string $str) {
    return str_replace(['привет', 'Привет'], 'здраствуйте', $str);
}, $greetings));


echo replaceHtml($textHtml);
