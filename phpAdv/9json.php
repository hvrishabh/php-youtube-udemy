<?php
// foreach for the objects
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump($jsonobj);
echo"<br>";

$obj = json_decode($jsonobj);
var_dump($obj);
echo"<br>";
foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
echo"<br>";    echo"<br>";    echo"<br>";


?>


<!-- <?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter;echo"<br>";
echo $obj->Ben;echo"<br>";
echo $obj->Joe;echo"<br>";

echo $obj->Ben;
echo"<br>";    echo"<br>";    echo"<br>";

?>

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump( (json_decode($jsonobj, true)));
echo"<br>";
print_r( (json_decode($jsonobj, true)));
echo"<br>";
$test = (json_decode($jsonobj, true));

foreach($test as $key => $value){
    echo $key . "     ". $value;
    echo"<br>";
}
?> -->


<!-- <?php

//json stands for JavaScript Object Notation, and is a syntax for sorting and exchanging data.

//  json_encode()
//  json_decode()

?>

<?php
// key-value pair encode............
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
var_dump($age);
echo "<br>";
echo json_encode($age);

echo "<br>";
// index array encode into json format .....................
$cars = array("Volvo", "BMW", "Toyota");
echo "<br>";
$jsoncars = json_encode($cars);
echo json_encode($cars);
echo "<br>";
echo "<br>";

// decoding the array.................................return object
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));
echo "<br>";
echo "<br>";
echo "<br>";
// decoding the json , when the second pararmeter is set to true it returns associative array.............................
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj, true));
echo "<br>";
var_dump(json_decode($jsoncars, true));
?> -->




