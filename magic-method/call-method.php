<!-- 
    1.when someone tring to access  private or non existing method then __call() method called automatically.
    2.__call($method,$arg) take two aru for showing this property name and value.
 -->
 <?php

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

?>