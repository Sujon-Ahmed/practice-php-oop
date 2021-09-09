<!-- what are traits 
PHP only supports single inheritance: a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
Traits are declared with the trait keyword: -->

<?php
    trait hello{
        public function sayHello(){
            echo "Hello Everyone\n";
        }
        public function sayHi(){
            echo "Hi Everyone\n";
        }
    }
    trait bye{
        public function sayBye(){
            echo "Bye Bye Everyone\n";
        }
    }
    class base{
        use hello,bye;
    }
    $obj = new base();
    $obj->sayHello();
    $obj->sayBye();
    $obj->sayHi();
?>