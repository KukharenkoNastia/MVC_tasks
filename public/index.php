<?php
require __DIR__ . './../vendor/autoload.php';

$randomNumbers = [5, 3, 9, 1, 8, 7, 2, 6, 4, 0];

print_r('<pre>');
print_r($randomNumbers);

asort($randomNumbers);

print_r('<pre>');
print_r($randomNumbers);

rsort($randomNumbers);

print_r('<pre>');
print_r($randomNumbers);

?>