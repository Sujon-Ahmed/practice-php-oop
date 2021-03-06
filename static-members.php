<!-- Static properties can be called directly - without creating an instance of a class.
Static properties are declared with the static keyword: -->
<?php
    // example -1
    /* class personal{
        public static $name = "Sujon Ahmed";

        public static function show(){
            echo self::$name;
        }
    }
    personal::show(); */

    // example - 2 how to use static parent class properties to the child class
    /* class personal{
        public static $name = "Sujon Ahmed";
    }
    class account extends personal{
        public function show(){
            echo parent::$name;
        }
    }
    $obj = new account();
    $obj->show(); */

    // example- 3 static method with inheritance
    class xyz{
        protected static $name = "Parent";
    }
    class abc extends xyz{
        public static $name = "Child";
        public function dis(){
            // return self::$name;
            return parent::$name;
        }
    }
    $obj = new abc();
    echo $obj->dis();

?>