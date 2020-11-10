<?php

Class Greeter {

    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayHello() {
        return  'hello, my name is' . $this->name . '\n';
    }
}

$mariano = new Greeter('Mariano');
echo $mariano->sayHello();
$matu = new Greeter('Matu');
echo $matu->sayHello();

/*
 *  What's the output in the command line for this code?
 *
 *  We want our greeter class to be able to say goodbye. What would you do ? Commit the changes for this
 *  questions in this class.
 *
 */