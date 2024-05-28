<?php

namespace App\Mail;

use DockerTask\Interfaces\SenderInterface;

abstract class SenderClass implements SenderInterface
 {
     protected $mailer;

     public function __construct(SenderInterface $sender){
         $this->mailer = $sender;
     }

     public function send($to, $subject, $message): bool
     {
         return $this->mailer->send($to, $subject, $message);
     }
}