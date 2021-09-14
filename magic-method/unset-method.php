<?php

class abc{
    public $name = "Sujon Ahmed";
    private $roll;
    private $age;
}
$obj = new abc();
unset ($obj->name);
echo $obj->name; // for public property name we can easily unset 

?>