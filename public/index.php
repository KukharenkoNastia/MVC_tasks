<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$users = [
    ['name' => 'Alice', 'age' => 25],
    ['name' => 'Bob', 'age' => 30],
    ['name' => 'Charlie', 'age' => 22],
    ['name' => 'Diana', 'age' => 28],
    ['name' => 'Di', 'age' => 15],
    ['name' => 'Eve', 'age' => 35],
    ['name' => 'Eve2', 'age2s' => 35],
];

function adult(array $user): bool
{
    return isset($user['age']) && $user['age'] > 18;
}

print_r('<pre>');
print_r(array_filter($users, 'adult'));
