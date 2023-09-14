<?php


$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

$age = array_change_key_case($age, CASE_UPPER);
echo "<pre>";
print_r($age);
echo "</pre>";


?>

<?php
$pets=array("aAAA"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
print_r(array_change_key_case($pets,CASE_LOWER));
?>