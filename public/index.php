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

foreach ($text as $str) {
    if (isFirstUpper($str)) {
        $format = '%s начинается с большой буквы';
        echo sprintf($format, $str);
    } else {
        $format = '%s начинается с маленькой буквы';
        echo sprintf($format, $str);
    }
    echo '<br>';
}

$textHtml = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Page</title>
</head>
<body>
    <h1>Welcome to the Example Page</h1>
    <p>Visit our <a href="https://www.example.com">homepage</a> for more information.</p>
    <p>You can also check out our <a href="https://blog.example.com">blog</a> for the latest updates.</p>
    <p>Contact our support team at <a href="mailto:support@example.com">support@example.com</a> for assistance.</p>
    <p>Follow us on social media:</p>
    <ul>
        <li><a href="https://www.facebook.com/example">Facebook</a></li>
        <li><a href="https://www.twitter.com/example">Twitter</a></li>
        <li><a href="https://www.instagram.com/example">Instagram</a></li>
        <li><a href="https://www.linkedin.com/company/example">LinkedIn</a></li>
    </ul>
    <p>For our open-source projects, visit our <a href="https://github.com/example">GitHub</a> page.</p>
</body>
</html>';

function findAllhUrl($strings): array
{
    $res = [];
    $regex = '/href="([^\s"]+)/';
    preg_match_all($regex, $strings, $matches);
    $res[] = $matches;
    return $res;
}

print_r('<pre>');
print_r(findAllhUrl($textHtml));

function splitStr($str):array
{
    return explode(',', $str);
}

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

print_r(array_map(function ($str)
{
    return str_replace('привет', 'здраствуйте', $str);
}, $greetings));

function replaceHtml($str):string
{
    return preg_replace('/<[^>]*>/', '', $str);
}

echo replaceHtml($textHtml);
