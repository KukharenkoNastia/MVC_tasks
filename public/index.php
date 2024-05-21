<?php
require __DIR__ . './../vendor/autoload.php';

use App\Mail\EmailSender;
use DockerTask\Classes\Bird;
use DockerTask\Classes\Cat;
use DockerTask\Classes\Dog;
use App\Mail\EmailDecorator;

use DockerTask\Classes\Logger;

$animals = [new Dog(), new Cat(), new Bird()];

foreach ($animals as $animal) {
    echo $animal->eat();
    echo '<br>';
    echo $animal->sleep();
    echo '<br>';
    echo $animal->makeSound();
    echo '<br>';
}

$logger = new Logger('file', 'app.log');
//$logger->log('info', 'This is an informational message');
//$logger->log('warning', 'This is a warning message');
//$logger->log('error', 'This is an error message');
//$logger->log('debug', 'This is a debug message');

$mail = new EmailSender();

$decorator = new EmailDecorator($mail);

$decorator->sendHello('khr.nastasia@gmail.com');
$decorator->sendNotification('hghgh.jbjh@mail.com');

?>