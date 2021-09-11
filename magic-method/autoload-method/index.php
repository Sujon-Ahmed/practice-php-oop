<?php

// require "classes/first.php";
// require "classes/second.php";

// now use __autoload magic method
function __autoload($class)
{
    require "classes/" . $class . ".php";
}
$obj = new first(); 

?>