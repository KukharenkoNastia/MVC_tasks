<?php

namespace MVCTask\function;

function isEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) == true;
}

function isFirstUpper(string $str): bool
{
    return preg_match('/^[A-Z]/m', $str) == true;
}

function findAllhUrl(string $strings): array
{
    $regex = '/href="([^\s"]+)/';
    preg_match_all($regex, $strings, $matches);
    $res[] = $matches;
    return $res;
}

function splitStr(string $str): array
{
    return explode(',', $str);
}

function replaceHtml(string $str): string
{
    return preg_replace('/<[^>]*>/', '', $str);
}