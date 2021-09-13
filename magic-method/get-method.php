<!-- 
    1.when someone trying to access private or non existing property then __get() method called automatically.
    2.__get($property) take one argument for showing this property name.
 -->
<?php
// example - 1
/* class abc{
    private $name = "Sujon";
    public function __get($property)
    {
        echo "This is private or non Existing property($property)";
    }
}
$obj = new abc();
echo $obj->name; */

// example -2

class abc{
    private $data = ["name"=>"Sujon", "course"=>"PHP", "fee"=>"8000"];
    public function __get($key)
    {
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        }else{
            return "This key ($key) is not defined.";
        }
    }
}
$obj = new abc();
echo $obj->age;

?>