<?php

$csvFile = 'data.csv';

$data = [
    ['id', 'name', 'age'],
    [1, 'John Doe', 30],
    [2, 'Jane Smith', 25],
    [3, 'Emily Johnson', 22],
    [4, 'Michael Brown', 35],
    [5, 'Jessica White', 29]
];

if (($handle = fopen($csvFile, 'w')) !== false) {
    foreach ($data as $row) {
        fputcsv($handle, $row);
    }
    fclose($handle);
    echo "CSV файл успешно создан и заполнен данными.";
} else {
    echo "Не удалось открыть файл для записи.";
}