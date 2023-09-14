<?php

class Circle {
    private $radius;

    public function __construct($rad){
        $this->radius = $rad;
    }
    public function area(){

        echo "The radius of circle is : ". (3.14*$this->radius*$this->radius)."<br>";

    }

    public function circumfrance(){
        echo " The Circumfrance of circle is : ".(2 * 3.14 * $this->radius)."<br>";
    }
}

$area = new Circle(7);
$area->area();
$area->circumfrance();