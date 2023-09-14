<?php

class Car {
    var $wheels = 4;
    var $handle = 1;
    var $doors = 4;
    var $engine = 1;

    function __construct(){
        echo $this->wheels = 10;
        echo "<br>Wheels Move <br0>";
    }
    function CreateDoors(){
        $this->doors = 6;
    }
}
$obj1 = new Car();
