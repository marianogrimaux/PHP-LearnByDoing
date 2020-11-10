<?php

class Greeter
{

    private static $prefix = 'Hello, my name is';
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayHello()
    {
        return self::$prefix . $this->name . '\n';
    }
}