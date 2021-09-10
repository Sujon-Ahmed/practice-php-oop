<?php
trait hello{
    public function sayHello(){
        echo "hello from hello traits\n";
    }
}
trait hi{
    public function sayHello(){
        echo "hello from hi traits\n";
    }
}
// when use same method two trait it's give error
// class base{
//     use hello,hi;
// }
  //for solve this type of problem we call that same method differently
  class base{
      use hello, hi{
          hello::sayHello insteadOf hi;
          hi::sayHello as public newHello;
      }
  }
$obj = new base();
$obj->sayHello();
$obj->newHello();
?>