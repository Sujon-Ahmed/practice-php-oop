<?php
// magic constants __LINE__
// echo "Line Number : " .__LINE__."<br>";
// echo "Line Number : " .__LINE__;

// magic constants __FILE__
// echo "The full path of this file : " .__FILE__;

// magic constants __DIR__
// echo "The full path of this directory : " .__DIR__;

// magic constants __FUNCTION__
// echo "The FUNCTION Name : " .__FUNCTION__; // RETURN Nothing
/* function myFunction(){
    echo "The FUNCTION Name : " .__FUNCTION__; // NOW RETURN FUNCTION NAME
}
myFunction(); */

// magic constants __CLASS__
class myClass{
    public function getClassName(){
        return __CLASS__;
    }
}
$obj = new myClass();
echo $obj->getClassName();

?>