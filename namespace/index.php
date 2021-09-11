<?php

require "products.php";
require "testing.php";
function wow(){
    echo "wow from index page </br>";
}
// use shortly
use pro\v1\command as cmd;

// $obj = new test\product();
$obj = new cmd\product();
$obj1 = new cmd\product();
// wow(); // run index file function
// pro\v1\command\wow(); // run product file function

?>