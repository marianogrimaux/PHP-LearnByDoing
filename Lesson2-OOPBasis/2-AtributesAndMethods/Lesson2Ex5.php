<?php

class PublicAttribute {
    public $firstName;
    public $lastName;
}

// When having public attributes anyone can change the values
$mariano = new PublicAttribute();
$mariano->firstName = 'Mariano';
$mariano->lastName = 'Grimaux';

// When having public attributes anyone can access the values

echo $mariano->firstName;
echo $mariano->lastName;

/*
 * Do you think there's any way to prevent the fact that anyone can change the values of these attributes?
 * How?
 *
 * Your answer:
 *
 */