<?php
class Greeter {

    public function sayHello() {
        return 'hello';
    }
}

$mariano = new Greeter();
$matu = new Greeter();
echo $mariano->sayHello();
echo $matu->sayHello();

/*
 *  As $mariano and $matu return the same when calling hello method.
 *  Are these the same object ?
 *
 *  Your answer:
 *
 */