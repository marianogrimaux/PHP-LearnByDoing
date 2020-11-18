<?php

class Animal {

    protected $name;

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

}

class Mammal extends Animal {

    protected $hairColor;
    protected $hairLenght;

    public function getHairColor() {
        return $this->hairColor;
    }

    public function getHairLenght() {
        return $this->hairLenght;
    }

    public function setHairColor(string $color) {
        $this->hairColor = $color;
    }

    public function setHairLenght(string $length) {
        $this->hairLenght = $length;
    }
}

class Human extends Mammal {

    public function talk() : string {
        return 'Hi Im talking';
    }
}

// New Human
$mariano = new Human();
// As mariano extends Mammal, public methods from Animal are inherited.
$mariano->setHairColor('Brown');
$mariano->setHairLenght('Short');
// As mariano is a Human that extends Mammal which extends Animal, mariano has access to Animal mehtods and attributes.
$mariano->setName("Mariano - Human");
// From animal
echo $mariano->getName() . "\n";
// From Mammal
echo $mariano->getHairColor() . "\n";
echo $mariano->getHairLenght() . "\n";
// Finaly the human class
echo $mariano->talk() . "\n";