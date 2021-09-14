<?php

class abc{
    public function __toString()
    {
        return "Can't print object as a string of class : ". get_class($this);
    }
}
$obj = new abc();
echo $obj; // when we are trying to show obj result by echo we are get a fatal-error ,, for solve this and set custom error message we use __toString() method

?>