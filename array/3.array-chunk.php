<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");


echo "<pre>";
print_r(array_chunk($cars,4,false));
echo "</pre>";
// print_r(array_chunk($cars,2));
?>