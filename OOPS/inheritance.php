<?php


class Car {
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

class Plane extends Car{
    var $wheels = 20;
}
// if(class_exists("Plane")){
//     echo "it does exist";
// }

$jet = new Plane();
// $jet->wheels = 10;
echo $jet->wheels;
?>