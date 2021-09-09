<?php
    // overriding properties
    /* class base{
        public $name = "Parent Class";
    }
    class derived extends base{
        public $name = "Child Class";
    }
    $obj = new derived();
    echo $obj->name; */

    // overriding method
    class base{
        public $name = "Parent Class";

        public function calc($a, $b){
            return $a * $b;
        }
    }
    class derived extends base{
        public $name = "Child Class";

        // public function calc($a, $b){
        //     return $a + $b;
        // }
    }
    $obj = new derived();
    echo $obj->calc(10,5);
?>