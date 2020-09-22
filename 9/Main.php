<?php

class Main {
    private $base,$height;

    public function __construct($base=1,$height=1) {
        $this->base = $base;
        $this->height = $height;
    }
    public function getArea() {
        return('Area of Triangle : '.($this->base*$this->height)/2);
    }
    public function __toString() {
        return('Area of Triangle : '.($this->base*$this->height)/2);
    }
}

$obj = new Main(5,4);
echo $obj->getArea();

?>