<?php

class test{

    var $one = 1;
    var $two = 2;
    var $three = 3;

    function addition(){
        $add_result =$this->one + $this->two;

        return $add_result;

    }

    function add_extra($extra){
        echo $this->addition() . "<br>";
        $add_extra_result = $extra + $this->addition();
        return $add_extra_result;
    }
}

$obj1 = new test();
echo $obj1->addition();
echo "<br>";
echo $obj1->add_extra(5);


?>