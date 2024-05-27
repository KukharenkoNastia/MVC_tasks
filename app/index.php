<?php

declare(strict_types=1);

$line =
    [
        'wewr werwe wer r werwer werwer',
        'kjk dg',
        'we we we we we we',
        'nm nmhhgh terwe 434545 tr'
    ];

function findLinesWithWordCount($text):array
{
    $pattern = '/^(?:\b\w+\b\W*){6}$/m';
    preg_match_all($pattern, $text, $matches);
    return $matches[0];
}

print_r('<pre>');
foreach ($line as $item)
{
    print_r(findLinesWithWordCount($item));
}

function generateHtml($links):array
{
    $urls = [];
    foreach($links as $url){
        $s = htmlspecialchars($url);
        $format = '<a href=\'%s\'>%s</a>';
        $urls[] = sprintf($format,$s,$s);
    }
    return $urls;
}

echo'<br>';
print_r(generateHtml($line));



