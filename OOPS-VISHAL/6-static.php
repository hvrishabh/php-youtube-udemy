<?php
// // $this-> is used to represent current object
// // static function is used where we want to call the function but don't want to call its __constructor , we make the staic function.



class class1{
    // public $num = 10;
    // function fun1(){
    //     echo "test<br>";
    // }

    static public $num = 11;
    public $num2 = 15;

    function __construct(){
        echo "Hello this is constructor function <br>";
    }   // constructor is called only when the object is created but in static function we dont create the objects therefore the constructor function is not executed


    static function fun1(){
        echo "<br>Test<br>";
        self::$num = 20;        // we can not retirive simple function here , we need to static variables only
        echo "<br>";
    }

     function fun2(){
        echo "fun2<br>";
        echo  self::$num = 21;
        echo "<br>";
        echo  $this->num2 = 16;
        echo "<br>";
    }
}


echo class1::fun1();
echo "<br>";
echo "coming from static function fun1  ".class1::$num;  // accessing static variable , we dont need to create object for this variable
echo "<br>";
$obj2 = new class1();
$obj2->fun2();