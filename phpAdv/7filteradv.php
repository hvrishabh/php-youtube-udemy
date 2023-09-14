<?php

$int = 122;

$min = 1;

$max = 300;

if(filter_var($int, FILTER_VALIDATE_INT, ["options"=>["min_range" => $min, "max_range" => $max ]]) === false){
    echo("Variable value is not within the legal range");

}else {
    echo("Variable value is within the legal range");
}

?>

<?php
$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>