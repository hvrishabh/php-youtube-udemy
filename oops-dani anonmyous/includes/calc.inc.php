<?php
declare(strict_types=1);
include 'class-autoload.inc.php';


$oper = $_POST['oper'];
$num1 = $_POST['num1'];
// $num1 = int($num1);
$num2 = $_POST['num2'];
// $num2 = int($num2);

// $calc = new Calc($oper, $num1, $num2){}
$calc = new Calc($oper, (int) $num1, (int) $num2);
try{
    echo $calc->calculator();
}catch (TypeError $e){
    echo "Error : " . $e->getMessage();
}
?>