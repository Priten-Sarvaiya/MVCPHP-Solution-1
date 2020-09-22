<?php

class Main {
    private $value1,$value2;

    public function __construct($value1,$value2) {
        if(!is_int($value1) || !is_int($value2))
            throw new InvalidArgumentException("Only integer numbers Allow");
        $this->value1 = $value1;
        $this->value2 = $value2;
        
    }
    public function add() {
        return($this->value1+$this->value2);
    }
    public function subtract() {
        return($this->value1-$this->value2);
    }
    public function multiply() {
        return($this->value1*$this->value2);
    }
    public function divide() {
        return($this->value1/$this->value2);
    }
}

try {
    $obj = new Main(12,6);
    echo "<br>".$obj->add();
    echo "<br>".$obj->subtract();
    echo "<br>".$obj->multiply();
    echo "<br>".$obj->divide();

}
catch(Exception $err) {
    echo "Message : ".$err->getMessage();
}


?>