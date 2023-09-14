<?php

// // polymorphosim , is same opeation may be behaived differently in different class

// // polymorphosim is implemented using two method 1. via Abstract class 2. Interface

// abstract class class1{
//     abstract function fun1();

// }

// class class2 extends class1{
//     function fun1(){
//         echo "Fun 2 : class 2<br>";
//     }
// }
// class class3 extends class1{
//     function fun1(){
//         echo "Fun 3 : class 2<br>";
//     }
// }

// $obj = new class2();
// $obj->fun1();           // here in this class fun1 has different output for the different class , this is called polymorphosim

// .........................................................

interface  class1{
    public function fun1();

}

class class2 implements class1{
    function fun1(){
        echo "Fun 2 : class 2<br>";
    }
}
class class3 implements class1{
    function fun1(){
        echo "Fun 3 : class 2<br>";
    }
}

$obj = new class2();
$obj->fun1();           // here in this class fun1 has different output for the different class , this is called polymorphosim