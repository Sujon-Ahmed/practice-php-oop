<!-- Properties and methods can have access modifiers which control where they can be accessed.
There are three access modifiers:
    public - the property or method can be accessed from everywhere. This is default
    protected - the property or method can be accessed within the class and by classes derived from that class
    private - the property or method can ONLY be accessed within the class -->

    <!-- table of access modifiers 
        Access      Class-Itself        Outside-Class       Derived-Class
        -------------------------------------------------------------------
        public      ok                  ok                  ok
        protected   ok                  error               ok
        private     ok                  error               error

    -->

<!-- example - 01 -->

<?php
    // class Fruit{
    //     public $name;
    //     protected $color;
    //     private $weight;
    // }
    // $obj = new Fruit();
    // echo $obj->name = "Mango"; // it's work fine
    // echo $obj->color = "Yellow"; // it's given error
    // echo $obj->weight = 300; // it's given error

    // example - 2
    class Fruit{
        public $name;
        public $color;
        public $weight;
        // a public method (default)
        public function set_name($n){
           return $this->name = $n;
        }
        // a protected method
        protected function set_color($c){
            return $this->color = $c;
        }
        // a private method
        private function set_weight($w){
            return $this->weight = $w;
        }
    }
    $obj = new Fruit();
    echo $obj->set_name("Mango"); // it's work fine
    // echo $obj->set_color("Yellow"); // it's given error
    // echo $obj->set_weight(300); // it's given error

?>