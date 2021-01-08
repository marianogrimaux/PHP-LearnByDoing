<?php

interface Greeter{
public function sayHello() : string;
}

abstract class Animal {
}

class Human extends Animal implements Greeter {

    public function sayHello() : string {
        return "hello";
    }
}

class Alien implements Greeter
{
    public function sayHello() : string {
        return "Term tonk'peh";
    }
}

$human = new Human();
$alien = new Alien();

greet($human);
greet($alien);

function greet(Greeter $greeter)
{
    echo $greeter->sayHello() . "\n";
}