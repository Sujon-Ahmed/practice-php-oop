<!-- Inheritance in OOP = When a class derives from another class.
The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
An inherited class is defined by using the extends keyword.
Let's look at an example: -->
<?php
    // base class
   /*  class Fruit{
        public $name;
        public $color;

        function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "The Fruit is {$this->name} and the color is {$this->color}";
        }
    }
    // strawberry inherit from Fruit class
    // derived class
    class strawberry extends Fruit{
        public function message(){
            echo "Am i a Fruit or a Berry"."<br>";
        }
    }
    $obj = new strawberry("Strawberry","Red");
    $obj->message();
    $obj->intro(); */

    // ============== second example method ==============
    /* class Mobile{
        public $name;
        public $color;
        public function intro(){
            echo "The mobile is {$this->name} and color is {$this->color}";
        }
    }
    // inherit class
    class Nokia extends Mobile{
        public $model;
        public function __construct($name,$color,$model)
        {
            $this->name = $name;
            $this->color = $color;
            $this->model = $model;
        }
        public function msg(){
            echo "The mobile is {$this->name} , color is {$this->color} and model is {$this->model}";
        }
    }
    $obj = new Nokia("Nokia","White","c6");
    $obj->msg(); */

    // =============== third example method ================
    class company{
        public $name;
        public $age;
        public $salary;

        public function __construct($name,$age,$salary)
        {
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }
        public function info(){
            echo "<h3>Employee Profile</h3>";
            echo "Employee Name : {$this->name}"."<br>";
            echo "Employee Age : {$this->age}"."<br>";
            echo "Employee Salary : {$this->salary}";
        }
    }
    class manager extends company{
        public $ta = 1000;
        public $ph = 300;
        public $totalSalary;
        public function info(){
            $this->totalSalary = $this->salary + $this->ta + $this->ph;
            echo "<h3>Manager Profile</h3>";
            echo "Manager Name : {$this->name}"."<br>";
            echo "Manager Age : {$this->age}"."<br>";
            echo "Manager Salary : {$this->totalSalary}";
        }
    }
    $obj = new manager("Sujon Ahmed",22,10000);
    $obj->info();
?>