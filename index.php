<?php

use Fruit as GlobalFruit;

class Fruit
{
    // properties
    public $name;
    public $color;

    // method for set name
    public function set_name($name)
    {
        $this->name = $name;
    }

    // method for set color
    public function set_color($color)
    {
        $this->color = $color;
    }

    // method for get name
    public function get_name()
    {
        return $this->name;
    }

    // method for get color
    public function get_color()
    {
        return $this->color;
    }
}

$apple = new GlobalFruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo $apple->get_name();
echo '<br/>';
echo $apple->get_color();
