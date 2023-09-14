<!-- <?php

// // encapsulation ==  defining the accessbility or restricts outside the class.
// class class1{
//     // public $num;        //it can be accessed outside and can also change its value.
//     protected $num;     // it can not be accessed outside , neither its value can be changed outside
//     // for accessing outside we use GETTER and SETTER method
//     function __construct(){
//         $this->num = 1;
//     }

//     function getNum(){
//         return $this->num;
//     }   //this function works like the getter method
// }

// $obj = new class1();
// // $obj->num = 2;  // as we here are able to change the value of the property outside of the class, to restrict this we use the encapsulation .
// echo $obj->getNum();


// // access modifiers
// // 1. public
// // 2. protected
// // 3. private

?> -->


<?php
// class class2
// {
//     // private $num;   //if the function is private then it is accessable only to this class
//     protected $num;
//     function __construct()
//     {
//         $this->num = 1;
//     }
// }

// class class3 extends class2{
//     function getNum()
//     {
//         $this->num = 3;
//         return $this->num;
//     }
// }

// $obj3 = new class3;
// echo $obj3->getNum();
?>


<?php
class class2
{
    // private $num;   //if the function is private then it is accessable only to this class
    protected $num;
    protected $test;
    function __construct()
    {
        // $this->num = 1;
    }
    public function getData(){
        echo "Hello2";
       echo   $this->test =3;
    }
}

class class3 extends class2{
    function getDataChild()
   {
        return self::getData();
        // echo "Hello3";

   }
}

$obj3 = new class3;
echo $obj3->getData();



// if the parent class functin in protected or private then we must , make the child class public or protected respectively