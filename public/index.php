<?php

declare(strict_types=1);

require __DIR__ . './../vendor/autoload.php';

$emailStrings = [
    'Contact us at support@example.com for more information.',
    'Send an email to john.doe@example.com or jane_doe123@another-domain.org.',
    'Our team: team@company.com, hr@company.com, sales@company.com.',
    'Invalid emails: user@.com, @example.com, user@com.',
    'Mixed content: Some text, user@example.com, more text, another.user@example.net.',
    'Personal emails: mike@example.com, sarah.connor@cyberdyne.org, t800@skynet.com.'
];

function extractEmail(string $str): array
{
    $emailPattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';
    preg_match_all($emailPattern, $str, $matches);
    return $matches;
}

foreach ($emailStrings as $string) {
    echo $string;
    print_r('<pre>');
    print_r(extractEmail($string));
    echo '<br>';
}
