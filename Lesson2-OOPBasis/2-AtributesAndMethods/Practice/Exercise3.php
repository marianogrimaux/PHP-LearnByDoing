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
        return self::$prefix . $this->name;
    }
}

/*
 *  Try to add more attributes and methods in order to have a better greeting message.
 *  Explain your changes providing detail about why some of them are public and other private.
 *
 */