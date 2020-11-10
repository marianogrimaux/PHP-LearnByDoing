<?php
class Greeter {

    private $name;
    private $context;

    public function __construct(string $name, $context)
    {
        $this->name = $name;
        $this->context = $context;
    }

    public function setContext($context)
    {
        $this->context = $context;
    }

    private function giveInformalGreetings()
    {
        return "Hi!, my name is " . $this->name;
    }

    private function giveFormalGreetings()
    {
        return "Hello, my name is " . $this->name;
    }

    public function sayHello()
    {
        if ($this->context == 'work')
        {
            $greetings = $this->giveFormalGreetings();
        } else {
            $greetings = $this->giveInformalGreetings();
        }
        return $greetings;
    }
}
$greeter = new Greeter("Mariano", "work");
echo $greeter->sayHello();
$greeter->setContext("friends");
echo $greeter->sayHello();


/*
 *
 * When changing the context from work to friends, what happened ?
 *
 * Your answer:
 *
 */