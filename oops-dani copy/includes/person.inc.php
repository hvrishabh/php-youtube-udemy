<?php
// class is used for categorize the propeties and methods
class Person {
    // Properties
    public $name;
    public $eyeColor;
    public $age;

    // Method

    public function setName($name, $eyeColor, $age){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;

    }

}