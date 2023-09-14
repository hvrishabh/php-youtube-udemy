<?php

class car {
    static $wheels = 4;
    var $handle = 1;
    static function MoveWheels(){
        echo car::$wheels = 10;
    }
}

// $bmw = new Car();
// // echo $bmw->wheels;
// echo $bmw::$wheels;

echo "<br>";
echo car::$wheels;
echo "<br>";
car::MoveWheels();