<!-- <?php

$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($i = 0 ; $i < $arrlength; $i++){
    echo $cars[$i] . "<br>";
}
?> -->

<!-- <?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $key=> $value){
    echo $key. "  " . $value;
    echo "<br>";
}
?> -->

<?php
// A two-dimensional array:
$cars=array
  (
  array("Volvo",100,96),
  array("BMW",60,59),
  array("Toyota",110,100)
  );


  echo "<pre>";
  print_r($cars);
  echo "</pre>";

  foreach($cars as $outer){
    foreach($outer as $key => $value){
        echo $key. "  ". $value ;
        echo "<br>";
    }
  }
?>