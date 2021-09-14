<?php

class abc{
    public $name = "Sujon Ahmed";
    private $roll;
    private $age;

    public function show($roll,$age){
        $this->roll = $roll;
        $this->age = $age;
    }
    public function __unset($property){
        unset($this->$property);
    }
}
$obj = new abc();
// unset ($obj->name);
// echo $obj->name; // for public property name we can easily unset 
$obj->show(923364,21);
echo "<pre>";
unset($obj->roll);
print_r($obj);
echo "</pre>";

?>