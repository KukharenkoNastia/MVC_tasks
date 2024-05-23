<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

function replaceHtml($str):string
{
    return preg_replace('/<[^>]*>/', '', $str);
}

$strs = [
    '<p>This is a <a href=\'#\'>link</a> in a paragraph.</p>',
    '<div>Another <span style=\'color: red;\'>line</span> with <strong>HTML</strong> tags.</div>',
    '<ul><li>Item 1</li><li>Item 2</li></ul>'
];

print_r('<pre>');
print_r($strs);

foreach ($strs as $str)
{
    echo replaceHtml($str);
    echo '<br>';
}

$strUrl= [
    '<p>This is a <a href="https://example.com">link</a> in a paragraph.</p>',
    '<p>Here is another link: <a href="http://example.org">example.org</a>.</p>',
    '<p>And one more: <a href="https://example.net">example.net</a>.</p>'
];

function matchUrl($strings):array
{
    $res = [];
    foreach ($strings as $str) {
        $regex = '/href="([^\s"]+)/';
        preg_match_all($regex, $str, $matches);
        $res[] = $matches;
    }
    return $res;
}

print_r($strUrl);
print_r(matchUrl($strUrl));
