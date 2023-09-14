<?php
// class is used for categorize the propeties and methods
class Person {
    // Properties
    public $name;
    public $eyeColor;
    public $age;

    // static function
    public static $drinkingAge = 21;
    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    }

    // Constructor
    public function __construct($name, $eyeColor, $age=90){
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;

    }

    public function getDA(){
        return self::$drinkingAge;      //returning a staic propetry using a method and now this method can be called via the object method of the class.
    }
    public function setName(string $newName){
        $this->name = $newName;
    }

    public function getName(){
        return $this->name;
    }

}