<?php

class class1
{
    // public $num;
    public function __construct()
    {
        $this->num = 1;
        echo "Construct  1 <br>";

    }
    public function fun1()
    {
        echo "func1<br>";
    }
}

class class2 extends class1
{

    public function __construct()
    {
        // if we want to call the parent class __constructor function also then,
        // echo $this->num = 2;   // num = 1 //as the variable we have created we have again below called the parent class, i.e. when the object is created it will give num = 1 from parent class only, but if we right it after calling parent class , it will give num =2.
        parent::__construct();
        $this->num = 2;     // num =2
        echo "Construct 2 <br>";
    }

//  function __construct(){
//         echo "Construct 2 <br>";
//  }
function fun1(){
        parent::fun1(); // calling parent class function also , while creating an object, that is of the same name
    echo "func2<br>";
}

// if we have constructor of class2 then it will be called while creating a object of class2 else constructor of class1 will be called.
}

$obj = new class2();
$obj->fun1(); // class2 is called the function of class1.
// if the same function exists in the child class then , it will give prority to the function of the child class and will not called parent class functions, but if the function with same name does not exists in the child class then it will call the function from the parent class.
echo "<br>".$obj->num;
