<?php
// example -1
class abc{
    public $name;
    private $roll;
    private $age;

    public function show($roll,$age){
        $this->age = $age;
        $this->roll = $roll;
    }
    // use for check private property isset or not
    public function __isset($property)
    {
        echo isset($this->$property);
    } 
}
$obj = new abc();
// $obj->name = "Sujon";
// echo isset($obj->name); //result is 1 because the name property is fill by value
$obj->show(923364,21);
echo isset($obj->roll);

// example -2
// class student{
//     public $course;
//     private $first_name;
//     private $last_name;
//     private $details = ['name'=>'test name','age'=>'20'];

//     public function setName($fname, $lname){
//         $this->first_name = $fname;
//         $this->last_name = $lname;
//     }
//     public function __isset($details)
//     {
//         echo isset($this->details[$details]);
//     }
// }
// $obj = new student();
// $obj->course = "PHP";
// echo isset($obj->course);
// echo isset($obj->name);
// echo empty($obj->city);

?>