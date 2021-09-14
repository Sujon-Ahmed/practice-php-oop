<?php

class student{
    public $course;
    private $first_name;
    private $last_name;
    private $details = ['name'=>'test name','age'=>'20'];

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __isset($details)
    {
        echo isset($this->details[$details]);
    }
}
$obj = new student();
// $obj->course = "PHP";
// echo isset($obj->course);
echo isset($obj->name);
// echo empty($obj->city);

?>