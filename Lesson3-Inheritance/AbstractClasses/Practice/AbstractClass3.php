<?php
/**
 *  Design a model that will allow to know the area and perimeter of a circle, a triangle and a square.
 *  Complete the classes below and add the necessary code for the example to work.
 */

class Triangle {}
class Square {}
class Circle {}

$triangle = new Triangle(2, 3, 5);
$square = new Square(2);
$circle = new Circle(4);

echo $triangle->getArea() . "\n";
echo $triangle->getPerimeter() . "\n";

echo $square->getArea() . "\n";
echo $square->getPerimeter() . "\n";

echo $circle->getArea() . "\n";
echo $circle->getPerimeter() . "\n";

