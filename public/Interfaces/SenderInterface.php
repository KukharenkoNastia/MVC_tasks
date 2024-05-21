<?php
namespace DockerTask\Interfaces;

interface SenderInterface
{
    public function send($to, $subject, $message): bool;

}
