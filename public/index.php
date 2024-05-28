<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

function cleanString($input) {
    $cleanStr = trim($input);

    $cleanStr = preg_replace('/\s+/', ' ', $cleanStr);

    $cleanStr = preg_replace('/[^\w\s]/u', '', $cleanStr);

    return $cleanStr;
}

$strings = [
    "  Hello,   world!  ",
    "This    is    a test. ",
    "    PHP is  great!!! ",
    " Clean   this   string...  ",
    "\tWhitespace\tand\nnewlines\n",
];

foreach ($strings as $str)
{
    echo $str;
    echo '<br>';
    echo cleanString($str);
    echo '<br>';
}
