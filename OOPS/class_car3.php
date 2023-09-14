<?php

class car {
    var $wheels = 4;
    var $handle = 1;
    var $doors = 4;
    var $engine = 1;

    function MoveWheels(){
        echo $this->wheels = 10;
        echo "<br>Wheels Move <br0>";
    }
    function CreateDoors(){
        $this->doors = 6;
    }
}

$bmw = new Car();
$bmw->wheels = 8;

echo $bmw->wheels;
echo "<br>";
echo $bmw->MoveWheels();
echo "<br>";
// creating a new instance

$truck = new car();
echo $truck->wheels = 12;
echo $truck->CreateDoors();
echo "<br>";
echo $truck->doors;