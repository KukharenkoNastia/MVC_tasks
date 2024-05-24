<?php

namespace App\Mail;

 class EmailDecorator extends SenderClass
 {
     public function sendHello($to): bool
     {
         $message = 'Hello';
         $subject = 'We are glad to see you';
         return parent::send($to, $subject, $message);
     }

     public function sendNotification($to): bool
     {
         $message = 'Notification';
         $subject = 'Don\'t forget';
         return parent::send($to, $subject, $message);
     }
 }