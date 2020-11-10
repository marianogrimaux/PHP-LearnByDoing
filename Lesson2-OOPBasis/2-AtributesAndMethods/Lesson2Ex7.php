<?php

class Citizen
{
    private $dni;
    private $firstName;
    private $lastName;

    public function __construct($dni, $name, $lastName)
    {
        $this->dni = $dni;
        $this->firstName = $name;
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

}

$citizen = new Citizen("1234", "Mariano", "Grimaux");
echo $citizen->getDni();
echo "\n";
echo $citizen->getFirstName();
echo "\n";
echo $citizen->getLastName();
echo "\n";
echo "** Changing values  **\n";
$citizen->setFirstName("Pepe");
$citizen->setLastName("Lui");
echo $citizen->getDni();
echo "\n";
echo $citizen->getFirstName();
echo "\n";
echo $citizen->getLastName();
echo "\n \n";


