<?php

include('database.php');
echo "<pre>";
$obj =new query();
$result = $obj->getData();
print_r($result);
?>

