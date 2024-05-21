<?php

namespace App\Mail;

use DockerTask\Interfaces\SenderInterface;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class EmailSender implements SenderInterface
{
    private PHPMailer $mailer;

    public function __construct() {
        $this->mailer = new PHPMailer(true);
        $this->mailer->isSMTP();
        $this->mailer->Host = 'mailhog';
        $this->mailer->Port = 1025;
        $this->mailer->SMTPAuth = true;
    }

    public function send($to, $subject, $message): bool
    {
        try {
            $this->mailer->setFrom('nastya@example.com', 'Nastya');
            $this->mailer->addAddress($to);
            $this->mailer->Subject = $subject;
            $this->mailer->Body    = $message;

            $this->mailer->send();
            echo 'Письмо успешно отправлено!';
            return true;
        } catch (Exception $e) {
            echo 'Ошибка при отправке письма: '.$e->getMessage();
            return false;
        }
    }
}
