<?php

 // abstract means incomplete
 // abstract class means , it has atleast one abstract method

 // abstract function is that function , that is declared but not implemented

// eg : function test();

// no object can be created for abstract class
// abstract class, child class must contain abstract function
// ..................................................................//
// abstract class class1{
//     function test(){
//         echo "Test";
//     }

//     abstract function test1();

// }

// class class2 extends class1{
//     function test1(){
//         echo "<br>Test1<br>";
//     }
// }

// $obj1 = new class2();
// $obj1->test();
// $obj1->test1();
?>


<?php
// abstract class is used when we want to make our function mendatory to be used.
abstract class bank{
    abstract function id_proof();
    public $item = 5;       // variable can be defined in abstract class



}

class hdfc extends bank{
    function id_proof(){
        echo "id_proof function of bank hdfc <br>";
    }
}

class icici extends bank{
    function id_proof(){
        echo "id_proof function of icici class <br>";
    }
}

$obj1 = new hdfc();
$obj1->id_proof();
echo $obj1->item;
echo "<br>";

$obj2 = new icici();
$obj2->id_proof();
