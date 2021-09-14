<!-- 
    1.when someone trying to access  private static method or non existing private static method then __callStatic() method called automatically.
    2.__callStatic($method,$arg) take two aru for showing this property name and value.
 -->
<?php

/* class student{
    private static function hello(){
        echo "This is static hello function";
    }
    public static function __callStatic($method, $arg){
        echo "This is private method : $method";
    }
}
student::hello();  */// not access private method

/** 
    *? NOW trying to access this below way
 */

class student{
    private static function hello($name){
        echo "Hello , $name";
    }
    public static function __callStatic($method, $arg){
        if(method_exists(__class__,$method)){
            call_user_func_array([__class__,$method], $arg);
        }else{
            echo "Method does not exist : $method";
        }
    }
}
student::hello("Sujon");


?>