<?php

class Maths {
    private $num,$sum=1;
    public function __construct($num) {
        if(!is_int($num))
            throw new InvalidArgumentException("Not an integer");
        $this->num=$num;
    }
    public function result() {
        for ($i=1; $i<=$this->num; $i++) 
            $this->sum*=$i;
        echo "Factorial of $this->num : $this->sum";
    }
}

try {
    $obj = new Maths('6');
    $obj->result();
}
catch(Exception $err) {
    echo "Message : ".$err->getMessage();
}

?>