<?php

namespace MVCTask\Classes;

class TestClass
{
    public function __construct(
        public $publicValue,
        private $privateValue)
    {
    }

    public function publicMethod()
    {
        return "This is a public method.";
    }

    private function privateMethod()
    {
        return "This is a private method.";
    }
}