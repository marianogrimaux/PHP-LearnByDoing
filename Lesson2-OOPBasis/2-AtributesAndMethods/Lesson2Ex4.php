<?php

class Greeter {

    private static $prefix = 'Hello, my name is';
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function sayHello() {
        return self::$prefix . $this->name . '\n';
    }
}
$mariano = new Greeter('Mariano');
echo $mariano->sayHello();
$matu = new Greeter('Matu');
echo $matu->sayHello();

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