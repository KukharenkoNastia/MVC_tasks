<?php
namespace DockerTask\Classes;

use DockerTask\Interfaces\AnimalInterface;

class Dog implements AnimalInterface
{
    public function eat():void
    {
        echo "Dog eat meat";
    }

    public function sleep():void
    {
        echo "Dog sleep a lot";
    }

    public function makeSound():void
    {
        echo "Dog say GAF";
    }

}
