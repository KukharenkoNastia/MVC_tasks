<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$sales = [
    ['product' => 'apple', 'quantity' => 10, 'price' => 1.5],
    ['product' => 'banana', 'quantity' => 5, 'price' => 1.0],
    ['product' => 'orange', 'quantity' => 8, 'price' => 1.2],
    ['product' => 'apple', 'quantity' => 3, 'price' => 1.5],
    ['product' => 'banana', 'quantity' => 7, 'price' => 1.0],
    ['product' => 'orange', 'quantity' => 2, 'price' => 1.2],
    ['product' => 'apple', 'quantity' => 6, 'price' => 1.5],
];

echo 'Информация по яблокам';

function infoApple(array $el): bool
{
    return isset($el['product']) && $el['product'] == 'apple';
}

print_r('<pre>');
print_r(array_filter($sales, 'infoApple'));

echo 'Продано проуктов по видам';

print_r(array_count_values(array_column($sales, 'product')));

echo 'Всего продуктов ';

print_r(array_sum(array_column($sales, 'quantity')));

echo '<br>';
echo 'Итого сумма ';

print_r(array_reduce($sales, 'sum', 0.0));

function sum(float $sum, array $sale)
{
    $sum += $sale['quantity'] * $sale['price'];
    return $sum;
}
