<?php

class Main {
    private $starting_date,$ending_date;

    public function __construct($starting_date,$ending_date) {
        $this->starting_date=date_create($starting_date);
        $this->ending_date=date_create($ending_date);
    }
    public function difference() {
        $diff=date_diff($this->starting_date,$this->ending_date);
        echo "Difference : $diff->y years, $diff->m months, $diff->d days";
    }
}

$obj = new Main("1981-11-03","2013-09-04");
$obj->difference();
?>