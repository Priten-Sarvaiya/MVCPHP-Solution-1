<?php

class Main {
    private $radius;

    public function __construct($radius=1) {
        $this->radius = $radius;
    }
    public function getRadius() {
        return($this->radius);
    }
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    public function getArea() {
        return('Area of Circle : '.(3.14*$this->radius*$this->radius));
    }
    public function __toString() {
        return('Area of Circle : '.(3.14*$this->radius*$this->radius));
    }
    public function __destruct() {
        echo "<br>Object Destructor call";
    }
}

$obj = new Main();
$obj->setRadius(3);
echo $obj->getArea();

?>