<?php

class Main {
    private $side;

    public function __construct($side=1) {
        $this->side = $side;
    }
    public function getArea() {
        return('Area of Square : '.($this->side*$this->side));
    }
    public function __toString() {
        return('Area of Square : '.($this->side*$this->side));
    }
}

$obj = new Main(5);
echo $obj->getArea();

?>