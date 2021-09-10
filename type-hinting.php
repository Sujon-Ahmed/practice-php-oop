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
?>