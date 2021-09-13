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

?>