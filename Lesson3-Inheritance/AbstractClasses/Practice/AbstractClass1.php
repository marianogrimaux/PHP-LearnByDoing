<?php
{
    abstract class Animal {

        protected $name;

        public function __construct(string $name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    class Lion extends Animal {

        public function roar() {
            echo "Roaaaaar\n";
        }
    }

    class Dog extends Animal {

        public function bark() {
            echo "Bark Bark\n";
        }
    }

    class Cat extends Animal {

        public function meow() {
            echo "Meow\n";
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
         * As all the subclasses extended the super class behaviour we will have to
         * understand which implementation of Animal we are working with
         */
        if ($animal instanceof Cat) {
            $animal->meow();
        } else if ($animal instanceof Dog)
        {
            $animal->bark();
        } else {
            $animal->roar();
        }
    }
}