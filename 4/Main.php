<?php

class Main {
    private $arr;

    public function __construct($arr) {
        foreach ($arr as $num) {
            if(!is_int($num))
                throw new InvalidArgumentException("Only integer numbers Allow");
        }
        $this->arr=$arr;
    }
    public function do_sort() {
        sort($this->arr);
        print_r($this->arr);
    }
}

try {
    $arr = array(11, -2, 4, 35, 0, 8, -9);
    $obj = new Main($arr);
    $obj->do_sort();

}
catch(Exception $err) {
    echo "Message : ".$err->getMessage();
}

?>