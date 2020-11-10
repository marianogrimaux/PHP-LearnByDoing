<?php

class Greeter {

    private static $prefix = 'Hello, my name is ';
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayHello(string $greeterName = null)
    {
        return $greeterName ? self::$prefix  . $this->name . ' , nice to meet you ' . $greeterName :
            self::$prefix . $this->name;
    }
}

$mariano = new Greeter('Mariano');
echo $mariano->sayHello();
$matu = new Greeter('Matu');
echo $mariano->sayHello($matu->getName());
echo "\n \n";