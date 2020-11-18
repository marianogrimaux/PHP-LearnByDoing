<?php

class Greeter {

    private static $prefix = 'Hello, my name is ';
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayHello() {
        return self::$prefix . $this->name;
    }
}
$mariano = new Greeter('Mariano');
echo $mariano->sayHello() . "\n \n";
$matu = new Greeter('Matu');
echo $matu->sayHello() . "\n \n";

/*
 * Homework
 *
 * What is the output of this class ?
 *
 * Your answer:
 *
 *
 * Did it suffer any changes from it latest versions?
 *
 * Your answer:
 *
 *
 * Did the behaviour remain the same ?
 *
 * Your answer:
 *
 */