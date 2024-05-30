<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

function findLog(string $str, string $startDate, string $endDate): bool
{
    $pattern = '/\b(\d{4})-(\d{2})-(\d{2})\b/';
    preg_match($pattern, $str, $matches);

    if (! $matches) {
        return false;
    }

    if (! ($startDate <= $endDate)) {
        return false;
    }

    if (! (($startDate <= $matches[0]) && ($endDate >= $matches[0]))) {
        return false;
    }

    return true;
}

$logFilePath = 'app.log';

$logContent = file_get_contents($logFilePath);
$arrContent = preg_split('/\r?\n|\r/', $logContent);

print_r('<pre>');
print_r($logContent);

$logContent = file($logFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$errorRegex = '/\b(error|exception|fail|fatal|warning)\b/i';
$errorLines = [];

foreach ($arrContent as $line) {
    if (preg_match($errorRegex, $line)) {
        $errorLines[] = $line;
    }
}

echo '<br>';
echo 'Информация из лога по ошибкам';
echo '<br>';
print_r($errorLines);

$date_start = date('Y-m-d', strtotime('2024-05-15'));
$date_end = date('Y-m-d', strtotime('2024-05-22'));

$count = 0;
foreach ($arrContent as $line) {
    if (findLog($line, $date_start, $date_end)) {
        $count++;
    }
}

$format = 'Количество запросов к серверу за определенный период %s - %s: %s';
echo sprintf($format, $date_start, $date_end, $count);
echo '<br>';

$csvFile = 'data.csv';

if (($handle = fopen($csvFile, 'r')) !== false) {
    $data = [];

    while (($row = fgetcsv($handle, 1000, ',')) !== false) {
        $data[] = $row;
    }

    fclose($handle);

    foreach ($data as $row) {
        echo implode(', ', $row) . "<br>";
    }
} else {
    echo "Не удалось открыть файл CSV.";
}


