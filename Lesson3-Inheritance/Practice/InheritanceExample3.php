<?php

class Square {

    private $side;

    function __construct(int $side)
    {
        $this->side = $side;
    }

    public function getArea() {
        return pow($this->side, 2);
    }
}

class Cube extends Square {

    /*
     * Cube overrides getArea from square.
     * Cube has access to parent::getArea() which is, in this case Square::getArea()
     * Cube will modify the result and return its own area.
     */
    public function getArea()
    {
        $squareArea = parent::getArea();
        return 6 * $squareArea;
    }

}

$cube = new Cube(2);
echo $cube->getArea() ."\n";