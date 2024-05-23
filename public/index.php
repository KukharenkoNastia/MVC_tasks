<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

function isEmail($email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) == true;
}

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
    if (isEmail($email)) {
        $format = '%s эмейл валидный';
        echo sprintf($format, $email);
    } else {
        $format = '%s эмейл НЕ валидный';
        echo sprintf($format, $email);
    }
    echo '<br>';
}

function isFirstUpper($str): bool
{
    return preg_match('/^[A-Z]/m', $str) == true;
}

$text = [
    'This is a line.',
    'another line.',
    'Yet Another Line.',
    'more lines here.',
    'Start of the line with uppercase.'
];

foreach ($text as $str){
    if(isFirstUpper($str)){
        $format = '%s начинается с большой буквы';
        echo sprintf($format, $str);
    } else {
        $format = '%s начинается с маленькой буквы';
        echo sprintf($format, $str);
    }
    echo '<br>';
}
