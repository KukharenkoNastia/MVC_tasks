<?php
namespace DockerTask\Classes;

use DockerTask\Interfaces\AnimalInterface;

class Cat implements AnimalInterface
{
    public function eat():void
    {
        echo "Cat eat sour cream";
    }

    public function sleep():void
    {
        echo "Cat sleep with people";
    }

    public function makeSound():void
    {
        echo "Cat say MIAU";
    }

}