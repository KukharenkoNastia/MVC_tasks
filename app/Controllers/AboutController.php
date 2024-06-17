<?php

namespace MVCTask\Controllers;

//use ReflectionClass;
//use MVCTask\Controllers;
//use MVCTask\Classes\TestClass;

class AboutController {
    /**
     * @Route(path="/about", method="GET")
     */
    public function index() {
        echo "This is the About page!";
    }

    /**
     * @Route(path="/about/{id}", method="POST")
     */
    public function about(string $id) {
        echo "This is users id:" . $id;
    }
}
