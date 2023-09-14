<?php

// oops is a concept based on real life.
// object = anything we see is object, eg laptop , iron etc

// class = categorization of  real life object based on their attributes and behaviour

// attribute = propeties or variables
// behaviours = functions

class class1{
//    var $x = 1;  // declaration of a function in OOPS

    public $x = 1;  // correct method to declare a function in OOPS
    function fun1(){
        return $this->x++;     // this keyword is used to refer the current instance of the variable x, and it will give result of that.
        // echo "<br>";
        // echo "fun1";
    }
    function fun2(){
        echo "fun2";
    }


}

$obj1= new class1();    // creation of the object
$obj2 = new class1();


echo $obj1->x;
echo "<br>";
$obj1->fun1();  // calling a class fucntion
echo "<br>";
// echo $obj1->x;  // calling a public variable/propetry
echo $obj1->x;
echo "<br>";
echo $obj2->x;






?>