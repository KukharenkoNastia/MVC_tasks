<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$users = [
    'alice' => 'alice@example.com',
    'bob' => 'bob@example.com',
    'charlie' => 'charlie@example.com',
    'dave' => 'dave@example.com',
    'eve' => 'eve@example.com',
    'frank' => 'frank@example.com',
    'grace' => 'grace@example.com',
    'heidi' => 'heidi@example.com',
    'ivan' => 'ivan@example.com',
    'judy' => 'judy@example.com',
];

$keys = array_keys($users);
$val = array_values($users);
$flip = array_flip($users);

print_r('<pre>');
print_r($keys);
echo '<br>';
print_r($val);
echo '<br>';
print_r($flip);
