<?php
// class is used for categorize the propeties and methods
class Person {
    // Properties
    public $name;
    public $eyeColor;
    public $age;


    public function setName(string $newName){
        $this->name = $newName;
    }

    public function getName(){
        return $this->name;
    }

}