<?php

// passing a variable in the constructor function
class class3{
    function __construct(){
        $this->x = 200;
    }

    function fun2(){
        echo $this->x;
    }
}
$obj3 = new class3(20);
// even if we pass the parameter while creating an object in the arguments , it will not give any error but if we pass the function with argument and does not pass any parameter while creating a object it will through an error, This is the rule for the simple php functions also.
$obj3->fun2();
?>



<!-- <?php

// passing a variable in the constructor function
class class2{
    function __construct($y){
        $this->x = $y;
    }

    function fun2(){
        echo $this->x;
    }
}
$obj2 = new class2(20);
$obj2->fun2();
?> -->


<!-- <?php

// class class1{
//     // public $x = 10;
//     // public $x = 0;
//  function __construct(){
//         echo "start<br>";
//          $this->x = 10;     // to define a variable in the constructor we need to use the $this keyword to make it accessable outsid of that function.

//  }
//  function fun1(){
//         echo "Hello<br>";
//         echo $this->x;
//         echo "<br>";
//  }
//  function __destruct(){
//     echo "end<br>";
//  }


// }

// $obj1 = new class1();
// $obj1->fun1();

?> -->


