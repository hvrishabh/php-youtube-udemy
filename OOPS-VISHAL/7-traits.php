<?php
// // // trait is accessable only to the class where it is not , it is not inheritied
// trait class1{
//     function fun1(){
//         echo "Fun1<br>";
//     }
// }
// class class2 {
//     use class1;
//     function fun2(){
//         echo "Fun2<br>";
//     }
// }
// class class3 extends class2{

//     function fun3(){
//         echo "Fun3<br>";
//     }
// }
// class class4 extends class3{
//     use class1;
//     function fun4(){
//         echo "Fun2<br>";
//     }
// }

// $obj = new class3();
// $obj->fun1();

?>

<?php
trait t1{
    function fun1(){
        echo "t1:fun1<br>";
    }
}

trait t2{
    function fun2(){
        echo "t2:fun2<br>";
    }
    function fun1(){
        echo "t2:fun1<br>";
    }
}

class class1{
    use t1, t2{
        t2::fun1 insteadof t1;
        t1::fun1 as fun3;
        t2::fun2 as fun4;
    }
    function fun2(){
        echo "class1:fun2<br>";
    }

}
$obj = new class1();
$obj->fun2();   // this will give prority to the class function comparision to the trait

$obj->fun3();
$obj->fun1();
$obj->fun4();