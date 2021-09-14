<!-- 
    1.when someone tring to access  private or non existing method then __call() method called automatically.
    2.__call($method,$arg) take two aru for showing this property name and value.
 -->
 <?php
// example -1
/* class student{
    private $first_name;
    private $last_name;

    private function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __call($method, $arg)
    {
        echo "This is private or non existing method : $method";
        echo "<pre>";
        print_r($arg);
        echo "</pre>";
    }
}
$obj = new student();
$obj->setName("Sujon", "Ahmed");
// $obj->personal(); */

// example -2

class student{
    private $first_name;
    private $last_name;

    private function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __call($method, $arg)
    {
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $arg);
        }else{
            echo "Method does not exist : $method";
        }
    }
}
$obj = new student();
$obj->setName("Sujon", "Ahmed");
echo "<pre>";
print_r($obj);
echo "</pre>";

?>