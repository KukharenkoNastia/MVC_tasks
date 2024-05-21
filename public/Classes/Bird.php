<?php
namespace DockerTask\Classes;

use DockerTask\Interfaces\AnimalInterface;

class Bird implements AnimalInterface
{
    public function eat():void
    {
        echo "Bird eat bread";
    }

    public function sleep():void
    {
        echo "Bird sleep few";
    }

    public function makeSound():void
    {
        echo "Bird say CHIK-CHIRIK";
    }

}