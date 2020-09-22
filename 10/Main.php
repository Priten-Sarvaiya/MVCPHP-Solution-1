<?php

class Main {
    private $base,$height;

    public function __construct($base=1,$height=1) {
        $this->base = $base;
        $this->height = $height;
    }
    public function getArea() {
        return('Area of Rectangle : '.($this->base*$this->height));
    }
    public function __toString() {
        return('Area of Rectangle : '.($this->base*$this->height));
    }
}

$obj = new Main(5,4);
echo $obj->getArea();

?>