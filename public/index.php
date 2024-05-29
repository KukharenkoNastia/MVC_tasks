<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$users = [
    'alice' => [
        'age' => 25,
        'email' => 'alice@example.com',
        'address' => '123 Main St',
    ],
    'bob' => [
        'age' => 30,
        'email' => 'bob@example.com',
        'address' => '456 Oak St',
    ],
    'charlie' => [
        'age' => 35,
        'email' => 'charlie@example.com',
        'address' => '789 Pine St',
    ],
    'dave' => [
        'age' => 40,
        'email' => 'dave@example.com',
        'address' => '321 Birch St',
    ],
    'eve' => [
        'age' => 28,
        'email' => 'eve@example.com',
        'address' => '654 Cedar St',
    ],
    'frank' => [
        'age' => 33,
        'email' => 'frank@example.com',
        'address' => '987 Spruce St',
    ],
    'grace' => [
        'age' => 27,
        'email' => 'grace@example.com',
        'address' => '159 Elm St',
    ],
    'heidi' => [
        'age' => 32,
        'email' => 'heidi@example.com',
        'address' => '753 Willow St',
    ],
    'ivan' => [
        'age' => 29,
        'email' => 'ivan@example.com',
        'address' => '951 Maple St',
    ],
    'judy' => [
        'age' => 34,
        'email' => 'judy@example.com',
        'address' => '852 Aspen St',
    ]
];

foreach ($users as $name => $user) {
    echo $name;
    echo '<br>';
    foreach ($user as $userProp => $userVal) {
        echo $userProp . ' => ' . $userVal;
        echo '<br>';
    }
}
