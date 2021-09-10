<!-- PHP Type Hinting -->
<!-- As PHP is a loosely typed language, there is no need to specify a data type for variable declaration, function declaration or anywhere. But, using PHP5, we can specify the data type that is passed as arguments of PHP functions. This capability is called as type hinting. -->

<!-- Advantages of PHP Type Hinting -->

    <!-- 
    1.Using PHP type hinting, we can know the expected argument type of the function at the time of maintenance.
    2.Function declaration and usage would be obvious once the code is handover to another developer.
    3.Type hinting in PHP makes the code useful for some future reference. 
    -->
<?php
    // function sum($a){
    //     echo $a + 10;
    // }
    // sum(10); // it's work
    // sum("String"); // it's give error

    // for solve this problem we can use type hinting like this
    // function sum(int $a){
    //     echo $a + 1;
    // }
    // sum(10); // it's work
    // sum("Hello"); // it also give error but prevent unnecessary time westing.

    // let's see another example
    // function fruits(array $names){
    //     foreach($names as $name){
    //         echo $name . "<br>";
    //     }
    // }
    // $test = ["Mango","Apple","Banana"];
    // $test = "Mango"; // it's give error
    // fruits($test);

    // let's see another example in oop
    // class hello{
    //     public function sayHello(){
    //         echo "Hello Everyone";
    //     }
    // }
    // class bye{
    //     public function sayBye(){
    //         echo "Bye Everyone";
    //     }
    // }
    // function wow(bye $c){
    //     $c->sayBye();
    // }
    // $obj = new bye();
    // wow($obj);

    // let's see real example
    class school{
        public function getNames(student $names){
            echo "<ul>";
            foreach($names->names() as $name){
                echo "<li>" . $name . "</li>";
            }
            echo "</ul>";
        }
    }
    class student{
        public function names(){
            return ["Sujon","Alamin","Toukir"];
        }
    }
    class library{

    }
    $stu = new student();
    $sch = new school();
    $lib = new library();
     // $sch->getNames($lib);//it's give fatal error without type hinting
    // $sch->getNames($lib);//it's give getNames() must be an instance of student, by type hinting
    $sch->getNames($stu);

?>