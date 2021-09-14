<!-- 
    1.when someone trying to access and set private or non existing property value then __set() method called automatically.
    2.__set($pro,$val) take two aru for showing this property name and value.
 -->

 <?php
// example-1
/* class abc{
    private $name;
    public function __get($property)
    {
        echo "This is private or non existing property : $property";
    }
    public function __set($property, $value){
        echo "This is private or non Existing property($property) and value ($value)";
    }
}
$obj = new abc();
$obj->name = "Sujon Ahmed"; */

// example-2 
class student{
    private $name;
    public function show(){
        echo $this->name;
    }
    public function __get($property){
        echo "You are trying to access non existing or private property ($property)";
    }
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }else{
            echo "Property does not exist : $property";
        }
    }
}
$obj = new student();
$obj->name = "Sujon Ahmed";
$obj->show();

?>