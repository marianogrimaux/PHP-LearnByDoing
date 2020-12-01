<?php
{
    abstract class Animal {

        protected $name;

        public function __construct(string $name) {
            $this->name = $name;
        }

        /*
         * By declaring makeSound as abstract I will be forcing all the
         * subclasses to implement the makeSound method that returns a string
         */
        abstract public function makeSound() : string;

        public function getName() : string
        {
            return $this->name;
        }
    }

    class Lion extends Animal {

        public function makeSound(): string
        {
            return "Roaaaaar";
        }
    }

    class Dog extends Animal {

        public function makeSound(): string
        {
            return "Bark Bark";
        }
    }

    class Cat extends Animal {


        public function makeSound(): string
        {
            return "Meow";
        }
    }

    /*
   * Working with abstract classes
   */
    $cat = new Cat("Cat");
    $dog = new Dog("Dog");
    $lion = new Lion("Lion");

    $animals = [$cat, $dog, $lion];


    foreach ($animals as $animal) {
        /*
         * As animal declares getName, we know that all animal sub classes will
         * return their names.
         */
        echo "{$animal->getName()}\n";
        /*
         * As all the subclasses implement makeSound, we know that it's part of the behaviour of all animals
         */
        echo $animal->makeSound() . "\n";
    }

}