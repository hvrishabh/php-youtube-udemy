<?php


class demo{
    public function demofun(){
        echo "This is demo function ";
    }
    public function demofun2(){
        echo "This is demo function2222222 ";
    }

}
class demo2{
    public function demofun3(){
        echo "demofun2 ";
    }
}
class test{
    public function testfun($testargument){
        $testargument->demofun2();
    }
}


$obj1 = new demo();
$obj2 = new test();
$obj2->testfun($obj1);

// $paymentType = new cash();
// $buyProduct = new BuyProduct();
// $buyProduct->pay($paymentType);