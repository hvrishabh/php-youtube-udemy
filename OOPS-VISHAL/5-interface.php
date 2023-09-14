<?php

// // there is one small issue in inheritance for which we need interface,
// // the php does not support multiple inheritance of classes therefore we have used the concept of interface
// // interface support multiple inheritance
// // interface can only contain abstract function , not a normal function
// // in interface we can not define variables
// // No constructor in Interface
// // All function must be public in Interface
// //

interface class1{
    public function test1();
}

interface class2{
    public function test2();
}
class class_test{
    public function test3(){
        echo "test3<br>";
    }
}

class class3 extends class_test implements class1 , class2 {
    function test1(){
        echo "test1<br>";
    }
    function test2(){
        echo "test2<br>";
    }
}

$obj1 = new class3();
$obj1->test1();
$obj1->test2();
$obj1->test3();